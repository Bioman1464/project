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
                        <a href="#" title="" data-target='#trash' data-toggle='modal'><img src="svg/img/trash.png" alt=""></a>
                    </div>
                </div>
        </header>

        <div class='button-up' id='btn-up'>
           <a href='#'><img src="svg/img/up.png" alt=""></a>
        </div>

        <div class="modal" tabindex="-1" role="dialog" id='trash'>
            <div class="modal-dialog modal-wd" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Trash</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class='row'>
                        <div class='col-xl-6 d-inline-block'>
                            <div class=''><img src="svg/img/khudi2.png" alt="" width='60' height="auto">Name of item</div>
                            <!-- <div class='col-xl-5'></div> -->
                        </div>
                        <div class="col-xl-3">Volume</div>
                        <div class="col-xl-3">Price</div>
                    </div>
                     </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Buy</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="storeItem" tabindex="-1" role="dialog" aria-labelledby="storeItemLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <form class='modal-content'>
            <div class="modal-header">
                <h5 class="modal-title" v-if="!edit" id="exampleModalLabel">Sign up / Sign in</h5>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <h3 class='text-center'>Sign up</h3> 
                </div>
                <div>
                <div class='form-group'>
                    <label for="InputEmail">Email address</label>
                    <input id="InputEmail" type="email" class="form-control" placeholder="Enter Email" 
                        aria-describedby="emailHelp" v-model="user.email">
                </div>    
                </div>
                <div class="form-group">
                    <label for='InputPassword'>Password</label>
                    <input id='InputPassword' type="password" class='form-control' placeholder="Enter Password" 
                        v-model="user.password">
                </div>
            </div>
            <div class="modal-footer">
                <button @click="clearForm()" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">To register</button>
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
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </div>

        <div class="container img-stack">
            <div class="row">
                <div class="col-7">
                    <div class="col-5">
                        <div class="col-12">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img class="d-block" src="svg/img/macbook.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block" src="svg/img/macbook.png" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block" src="svg/img/macbook.png" alt="Third slide">
                                </div>
                              </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <img class="d-block" src="svg/img/macbook.png" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block" src="svg/img/macbook.png" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                  <img class="d-block" src="svg/img/macbook.png" alt="Third slide">
                                </div>
                              </div>
                            </div>
                        </div>
                    </div>

                <div class="col-7">
                <div class="col-12">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <img class="d-block" src="svg/img/macbook.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block" src="svg/img/macbook.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                          <img class="d-block" src="svg/img/macbook.png" alt="Third slide">
                        </div>
                      </div>
                    </div>
                </div>
            </div>

                </div>

            

                <div class="col-5 img-stack-big">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner img-center">
                            <div class="carousel-item active">
                              <img class="d-block" src="svg/img/macbook.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block" src="svg/img/macbook.png" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block" src="svg/img/macbook.png" alt="Third slide">
                            </div>
                        </div>
                    </div>
                </div>
                
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
                                <div class='product-img d-flex justify-content-center'><img src="svg/img/1khudi1.png" alt=""></div>
                                <h6 v-for="category in item.categories" v-bind:key="category.id">
                                    {{ category.title }}
                                </h6>
                                    <h5 class='item-name'>{{ item.name }}</h5>
                                    <p class='price'>Price: {{ item.price }} rub</p>        
                                    <a title="" @click="getProduct(item.id)" class='buy'>Button</a>     
                            </div>                 
                        </div>
                    </div>

                    <nav class='d-flex justify-content-center'>
                        <ul class="pagination">
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
                    <a href="" title="" data-target='#trash' data-toggle='modal'>Корзина</a>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-3 col-3">
                    <a href="" title="">Авторизация</a>
                    <br>
                    <a href="" title="">Terms of service</a>
                    <br>
                    <a href="" title="">Сотрудничество</a>
                </div>
                <div class="col-xl-8 col-md-6 col-sm-6 col-6">
                    <a href='https://ru-ru.facebook.com/'><img class='float-right' src="svg/img/face.png" width="50px" alt=""></a>
                    <a href='https://www.instagram.com/'><img class='float-right' src="svg/img/inst.png" width="50px" alt=""></a>
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
        margin-bottom: 40px;
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
    .pagination{
        position: relative;
        right: 40px;
    }
    .button-up{
        position: fixed;
        bottom: 220px;
        left: 40px;
    }
}

</style>

<script>

    jQuery(function(f){
    var element = f('#btn-up');
    f(window).scroll(function(){
        element['fade'+ (f(this).scrollTop() > 1200 ? 'In': 'Out')](500);          
    });

});

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
                    description: ""
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
                            this.getItems(item.id);
                        })
                        .catch(e => {
                            alert(e);
                        });  
            },
            
            /*async addItem() {
                
                    try {
                        const response = await API.post(`/categories/`, {
                            id: this.item.id,
                            title: this.item.name,
                            price: this.item.price,
                            color: this.item.color,
                            description: this.item.description
                        });
                        // this.clearForm();
                        // this.getItems();
                        alert("Item has been added");
                    } catch (error) {
                        alert(error);
                    }
                
            },*/
            clearForm() {
                // this.edit = false;
                // this.item.id = null;
// this.item.item_id = null;
                this.user.email = "";
                this.user.password = "";
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