<template>
    <main>
        <!-- <header>
            <h1>Items</h1>
            <button data-target="#storeItem" data-toggle="modal" type="button" class="btn btn-primary add-Item">Add Item</button>
            <hr>
        </header>
        <div>
        
        
        
            <nav class="pagination" style="float: left;">
        <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
            <a class="page-link" href="#" @click="getItems(pagination.prev_page_url)">Previous</a></li>
        <li class="page-item disabled">
            <a class="page-link text-dark" href="#">Page {{pagination.current_page}} of {{pagination.last_page}}</a>
        </li>
        <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
            <a class="page-link" href="#" @click="getItems(pagination.next_page_url)">Next</a></li>
            </nav>
        
        
        
        
            <span class="total">Total: {{ pagination.total }} items</span>
            <div style="float: right;">
        <div>
            <button v-if="ordering.orderBy == 'created_at'" @click="ordering.orderBy = 'title'; getItems();" class="btn btn-primary" type="submit">By date</button>
            <button v-if="ordering.orderBy == 'title'" @click="ordering.orderBy = 'created_at'; getItems();" class="btn btn-primary" type="submit">By title</button>
            <button v-if="ordering.order == 'desc'" @click="ordering.order = 'asc'; getItems();" class="btn btn-primary" type="submit">DESC</button>
            <button v-if="ordering.order == 'asc'" @click="ordering.order = 'desc'; getItems();" class="btn btn-primary" type="submit">ASC</button>
        </div>
            </div>
        </div>
        
        
        <Article v-for="item in items" v-bind:key="item.id">
            <h3>{{ item.title }}</h3>
            <span>{{ item.created_at | moment("DD.MM.YYYY") }}</span>
            <h4>Categories:</h4>
            <ul>
        <li v-for="category in item.categories" v-bind:key="category.id">
            <a href="#">{{category.title}}</a>
        </li>
            </ul>
            <p>
        {{ item.content }}
            </p>
            <button @click="deleteItem(item.id)" class="btn btn-danger">Delete</button>
        </Article>
        
        
        Modal
        <div class="modal fade" id="storeItem" tabindex="-1" role="dialog" aria-labelledby="storeItemLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
        <form @submit.prevent="addItem" class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" v-if="!edit" id="exampleModalLabel">Create Item</h5>
                <h5 class="modal-title" v-else id="exampleModalLabel">Edit Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Title" v-model="item.title">
                </div>
                <div>
                    <select v-model="item.categories" class="custom-select" multiple>
                        <option v-for="category in categories" v-bind:key="category.id" :value="category.id">{{category.title}}</option>
                    </select>
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Content" v-model="item.content"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button @click="clearForm()" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
            </div>
        </div> -->




        <header id="header" class="container-fluid">
                <div class='row'>
                    <div class='col-xl-2 col-md-2 col-sm-1 col-1 logo'>
                        <img src="svg/img/logo.png" alt="">
                    </div>
                    <div class='col-xl-7 col-md-6 col-sm-6 col-6 menu text-right'>
                        <a href="#" title="" data-target="#storeItem" data-toggle="modal">Sign up/Sign in</a>
                        <a href="#" title="">Help</a>
                    </div>
                    <div class="col-xl-2 col-md-2 col-sm-3 col-3 search">
                        <input type="text" placeholder="Search">
                    </div>
                    <div class="col-xl-1 col-md-2 col-sm-2 col-2 trash text-right">
                        <a href="#" title=""><img src="svg/img/trash.png" alt=""></a>
                    </div>
                </div>
        </header>

        <div class="modal fade" id="storeItem" tabindex="-1" role="dialog" aria-labelledby="storeItemLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
        <!-- <form @submit.prevent="addItem" class="modal-content"> -->
            <form class='modal-content'>
            <div class="modal-header">
                <h5 class="modal-title" v-if="!edit" id="exampleModalLabel">Sign up / Sign in</h5>
                <!-- <h5 class="modal-title" v-else id="exampleModalLabel">Edit Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <p class='text-center'>Sign up</p>
                    <input type="text" class="form-control" placeholder="Title" v-model="item.title">
                </div>
                <div>
                    <!-- <select v-model="item.categories" class="custom-select" multiple>
                        <option v-for="category in categories" v-bind:key="category.id" :value="category.id">{{category.title}}</option>
                    </select> -->
                </div>
                <div class="form-group">
                    <textarea class="form-control" placeholder="Content" v-model="item.content"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button @click="clearForm()" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
            </div>
        </div>
        
        <div class='container-fluid'>
            <div class="row">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <!-- <li data-target="#demo" data-slide-to="2"></li> -->
                    </ul>
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="svg/img/22.png" alt="Los Angeles">
                        </div>
                        <div class="carousel-item">
                            <img src="svg/img/22.png" alt="Chicago">
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                        <span class=""><img src="img/round-play-button.png" alt=""></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="container img-stack">
            <div class="row">
                <div class="col-3">
                    <div class="col-12">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="svg/img/macbook.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="svg/img/macbook.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="svg/img/macbook.png" alt="Third slide">
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-12 img-stack-min">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="svg/img/macbook.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="svg/img/macbook.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="svg/img/macbook.png" alt="Third slide">
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 img-stack-big">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner img-center">
                            <div class="carousel-item active">
                              <img class="d-block" src="svg/img/ip3.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block" src="svg/img/ip3.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block" src="svg/img/ip3.png" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3"></div>
            </div>
        </div>


        <div class='container'>
            <div class="row">
                <div class="col-4 col-xl-2 col-md-3 col-sm-4 sort">
                    <div class='products-filter'>
                        <div>
                            <h4>Faculties</h4>
                        </div>
                        <div>
                            <a href="/product" title="">* ИКСС</a>
                            <a href="">* РТС</a>
                            <a href="">ГФ</a>
                            <a href="">ИВО</a>
                            <a href="">ИСИТ</a>
                            <a href="">ФЭУ</a>
                            <a href="">ФФП</a>
                            <a href="">ИНО</a>
                        </div>
                    </div>
                    <div class='products-filter'>
                        <div>
                            <h4>Styles</h4>
                        </div>
                        <div>
                            <a href="">Футболки</a>
                            <a href="">Кружки</a>
                            <a href="">Браслеты</a>
                            <a href="">Худи</a>
                            <a href="">Рюкзаки</a>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-xl-10 col-md-9 col-sm-8">  
                    <div class="row">
                        <div class="col-9 col-sm-10 col-lg-6 col-xl-4 product-block" v-for="item in items" v-bind:key="item.id">
                            <div class="col-12 product">
                                <div class='product-img'><img src="svg/img/macbook.png" alt=""></div>
                                <h6 v-for="category in item.categories" v-bind:key="category.id">
                                    {{ category.title }}
                                </h6>
                                <h4 class='item-name'>{{item.desciprtion}}</h4>
                                    <p class='price'>Price: {{ item.id }} rub</p>        
                                    <a href='#' title="" @click="getProduct(item.id)" class='buy'>Button</a>       
                            </div>                 
                        </div>
                    </div>
                 </div>   

                    <nav class='col-xl-12'>
                        <ul class="pagination justify-content-center">
                            <div class="link-prev" v-bind:class="[{disabled: !pagination.prev_page_url}]">
                                <button class="btn orange prev" href="#" @click="getItems(pagination.prev_page_url)">Prev</button>
                            </div>
                            <li class="page-item page-number">Page {{pagination.current_page}} of {{pagination.last_page}}</li>
                            <!-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                            <li class="link-next" v-bind:class="[{disabled: !pagination.next_page_url}]">
                                <button class="btn orange next" href="#" @click="getItems(pagination.next_page_url)">Next</button>
                            </li>
                        </ul>
                    </nav>

            </div>    
        </div>
    

    <footer class='container-fluid foot'>
        <div class='container'>
            <div class='row bonch-merch'>
                <div>Bonch.Merch</div>
            </div>
            <div class="row foot-nav">
                <div class="col-xl-2 col-md-3 col-sm-3 col-3">
                    <a href="" title="">Поддержка</a>
                    <br>
                    <a href="" title="">FAQ</a>
                    <br>
                    <a href="" title="">Корзина</a>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-3 col-3">
                    <a href="" title="">Авторизация</a>
                    <br>
                    <a href="" title="">Terms of service</a>
                    <br>
                    <a href="" title="">Сотрудничество</a>
                </div>
                <div class="col-xl-8 col-md-6 col-sm-6 col-6">
                    <img class='float-right' src="svg/img/face.png" width="50px" alt="">
                    <img class='float-right' src="svg/img/inst.png" width="50px" alt="">
                    <div class='float-right social'>Мы в соцсетях: </div>
                </div>
            </div>
        </div>
    </footer>

    </main>
</template>

<style>

@media (min-width: 400px) and (max-width: 600px) {
    .price{
        margin-bottom: 60px;
    } 
    
}

@media (min-width: 400px) and (max-width: 768px){
    .foot{
        min-height: 200px;
    }
    .search input{
        width: 130px;
    }
    .social{
        display: none;
    }
}

</style>

<script>
    import { API } from "../api-common.js";
    export default {
        data() {
            return {
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

            getProduct(id){              
                    API.get(`/product/${id}`)
                        .then(response => {
                            // alert("Item has been removed");
                            this.getItems();
                        })
                        .catch(e => {
                            alert(e);
                        });  
            },
            

            async addItem() {
                if (this.edit === false) {
                    try {
                        const response = await API.post(`/item/`, {
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