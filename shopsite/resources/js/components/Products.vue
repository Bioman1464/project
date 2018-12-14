<template>
    <main>
    <Article v-for="item in items" v-bind:key="item.id">
            <h3>{{ item.name }}</h3>
            <span>{{ item.created_at | moment("DD.MM.YYYY") }}</span>
            <h4>Categories:</h4>
            <ul>
                <li v-for="category in item.categories" v-bind:key="category.id">
                    <a href="#">{{category.title}}</a>
                </li>
            </ul>
            <p>
                {{ item.name }}
            </p>
            <button @click="deleteItem(item.id)" class="btn btn-danger">Delete</button>
    </Article>
    </main>
</template>

<style>
    
</style>

<script>
    import { API } from "../api-common.js";
    export default {
        data() {
            return {
                /*items: [],
                item: {
                    id: "",
                    name: "",
                    content: "",
                    categories: [],
                    category: {
                        id: "",
                        title: ""
                    }
                },*/

                items: [],
                item: {
                    id: "",
                    name: "",
                    price: "",
                    color: "",
                    desciprtion: ""
                },
                categories: [],
                category: {
                    id: "",
                    title: ""
                },
                users: [],
                user: {
                    id: "",
                    name: "",
                    email: "",
                    email_verified_at: "",
                    password: ""                    
                },




                item_id: "",
                ordering: {
                    orderBy: "created_at",
                    order: "desc"
                },
// categories: [],
                pagination: {
                    current_page: 1
                },
                edit: false
            };
        },
        created() {
            this.getItems();
            this.getCategories();
        },
        methods: {
            async getCategories() {
                try {
                    const response = await API.get("/categories");
// console.log(response.data.data);
                    this.categories = response.data.data;
                } catch (error) {
                    alert(error);
                }
            },
            getItems(page_url = "/items?page=" + this.pagination.current_page + "&orderBy=" +
            this.ordering.orderBy + "&order=" + this.ordering.order) {
                let self = this;
                console.log(page_url);
                API.get(page_url) // отправляем запрос
                    .then(response => response.data) // автоматический парсинг JSON
                    .then(response => {
                        this.items = response.data;
                        console.log(this.items);
                        self.getPagination(response.meta, response.links);
                    })
                    .catch(e => {console.log(e);});
            },
            deleteItem(id) {
                if (confirm("Delete Item?")) {
                    API.delete(`/item/${id}`)
                        .then(response => {
                            alert("Item has been removed");
                            this.getItems();
                        })
                        .catch(e => {
                            alert(e);
                        });
                }
            },
            async addItem() {
                if (this.edit === false) {
                    try {
                        const response = await API.post(`/items/`, {
                            title: this.item.title,
                            content: this.item.content,
                            categories: this.item.categories.category
                        });
                        this.clearForm();
                        this.getItems();
                        alert("Item has been added");
                    } catch (error) {
                        alert(error);
                    }
                }
            },
            clearForm() {
                this.edit = false;
                this.item.id = null;
// this.item.item_id = null;
                this.item.title = "";
                this.item.body = "";
            },
            getPagination(meta, links) {
// console.log(meta);
// console.log(links);
                this.pagination = {
                    current_page: meta.current_page,
                    last_page: meta.last_page,
                    next_page_url: links.next,
                    prev_page_url: links.prev,
                    total: meta.total
                };
            },
            setOrdering() {
                this.ordering = {
                    orderBy: "title",
                    order: "asc"
                };
                this.getItems();
            }
        }
    };
</script>