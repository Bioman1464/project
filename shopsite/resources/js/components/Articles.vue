<template>
    <main class="Items">
      <header>
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




          <span class="total">Total: {{ pagination.total }} Items</span>
          <div style="float: right;">
            <div>
              <button v-if="ordering.orderBy == 'created_at'" @click="ordering.orderBy = 'title'; getItems();" class="btn btn-primary" type="submit">By date</button>
              <button v-if="ordering.orderBy == 'title'" @click="ordering.orderBy = 'created_at'; getItems();" class="btn btn-primary" type="submit">By title</button>
              <button v-if="ordering.order == 'desc'" @click="ordering.order = 'asc'; getItems();" class="btn btn-primary" type="submit">DESC</button>
              <button v-if="ordering.order == 'asc'" @click="ordering.order = 'desc'; getItems();" class="btn btn-primary" type="submit">ASC</button>
            </div>
          </div>
        </div>


        <Article v-for="item in Items" v-bind:key="item.id">
            <h3>{{ item.title }}</h3>
            <span>{{ item.created_at | moment("DD.MM.YYYY") }}</span>
            <h4>Categories:</h4>
            <ul>
              <li v-for="category_item in item.categories" v-bind:key="category_item.id">
                <a href="#">{{category_item.title}}</a>
              </li>
            </ul>
            <p>
                {{ item.content }}
            </p>
            <button @click="deleteItem(item.id)" class="btn btn-danger">Delete</button>
        </Article>


        <!-- Modal -->
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
                      <option v-for="category_item in categories" v-bind:key="category_item.id" :value="category_item.id">{{category_item.title}}</option>
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
        </div>
    </main>
</template>
<style></style>
<script>
import { API } from "../api-common.js";
export default {
data() {
return {
Items: [],
item: {
id: "",
title: "",
content: "",
categories: [],
created_at: ""
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
getItems(
page_url = "/items?page=" +
this.pagination.current_page +
"&orderBy=" +
this.ordering.orderBy +
"&order=" +
this.ordering.order
) {
let self = this;
console.log(page_url);
API.get(page_url) // отправляем запрос
.then(response => response.data) // автоматический парсинг JSON
.then(response => {
this.items = response.data;
console.log(this.items);
self.getPagination(response.meta, response.links);
})
.catch(e => {
console.log(e);
});
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
const response = await API.post(`/item/`, {
title: this.item.title,
content: this.item.content,
categories: this.item.categories
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
this.item.item_id = null;
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