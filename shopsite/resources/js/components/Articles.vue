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
                    <div class='col-2 logo'>
                        <img src="svg/img/logo.png" alt="">
                    </div>
                    <div class='col-2 offset-5 menu'>
                        <a href="#" title="">Sign up/Sign in</a>
                        <a href="#" title="">Help</a>
                    </div>
                    <div class="col-2 search">
                        <input type="text" placeholder="Search">
                    </div>
                    <div class="col-1 trash">
                        <a href="#" title=""><img src="svg/img/trash.png" alt=""></a>
                    </div>
                </div>
            
        </header>
        
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
  
                
                        <!-- <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="product-img"><img src="img/iphone.png" alt=""></div>
                        <div class="product-ttl d-flex justify-content-center">Купить iPhone</div>
                        <div class="btn-more">Более подробно</div>
                        </div> -->

                <div class="col-8 col-xl-10 col-md-9 col-sm-8">
                    
                    <div class="row">
                        <div class="col-9 col-sm-10 col-lg-6 col-xl-4 product-block" v-for="item in items" v-bind:key="item.id">
                            <div class="col-12 product">
                                <div class='product-img'><img src="svg/img/macbook.png" alt=""></div>

                                <h4 class='item-name'>Description of product</h4>

                                <!-- <h4 v-for="category in item.categories" v-bind:key="category.id">
                                    <p>{{ category.title }}</p>
                                </h4>  -->  
                                
                                    <p class='price'>Price: {{ item.id }} rub</p>
                                
                                
                                    <a href='' title="" class='buy'>Button</a>
                                
                            </div>                 
                        </div>
                    </div>

                    <!-- @media (min-width: 200px) and (max-width: 600px){
                        .lines img {
                            width: 80%;
                        }
                    
                        .lines {
                            right: 0;
                            bottom: -40px;
                        }
                    } -->
                    
                 </div>   

                    <nav class='col-xl-12'>
                        <ul class="pagination justify-content-center">
                            <div class="link-prev" v-bind:class="[{disabled: !pagination.prev_page_url}]">
                                <button class="btn orange prev" href="#" @click="getItems(pagination.prev_page_url)">Previous</button>
                            </div>
                            <li class="page-item page-number">Page {{pagination.current_page}} of {{pagination.last_page}}</li>
                            <!-- <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li> -->
                            <li class="link-next" v-bind:class="[{disabled: !pagination.next_page_url}]">
                                <button class="btn orange next" href="#" @click="getItems(pagination.next_page_url)">Next</button>
                            </li>
                        </ul>
                    </nav>
                    
                    <!-- <div class="row">
                        <div class='container'>
                            <div v-bind:class="[{disabled: !pagination.prev_page_url}]">
                                <button type="button" class='btn btn-outline-dark' href="#" @click="getItems(pagination.prev_page_url)">Prev</button>
                            </div>
                            <div>
                                <p class="page-link text-dark">Page {{pagination.current_page}} of {{pagination.last_page}}</p>
                            </div>
                            <div class='col-8'></div>
                            <div v-bind:class="[{disabled: !pagination.next_page_url}]">
                                <button type="button" class='btn btn-outline-dark' href="#" @click="getItems(pagination.next_page_url)">Next</button>
                            </div>
                        </div>
                    </div> -->

                
            </div>    
        </div>
    

        <section class='section5 container-fluid'>
        <div class='foot1 container'>
            <div class='row'>
                <div class='col-6 left-block'>
                    <div class='foot2'><div>Copyright 2018 | BonchDev</div><div>Все права защищены.</div>
                </div>
                <div class='foot3'>|</div>
                    <div class='foot-nav'>
                          <ul>
                            <li><a href="">Главная</a></li>
                            <li><a href="">Статьи</a></li>
                            <li><a href="">Контакты</a></li>
                          </ul>
                    </div>
                </div>
              <div class='col-6'>
                <div class='footlabel'><img src="img/bonch.png" alt="">bonch.dev</div>
              </div>
            </div>
      </div>
    </section>








        <!-- <header id="header" class="container">
           <div class='row'>
               <div class='col-2 logo'></div>
               <div class='col-3 offset-4 menu'></div>
               <div class="col-2 search"></div>
               <div class="col-1 trash"></div>
           </div>
           <div class="row">
               <div id="demo" class="carousel slide" data-ride="carousel">
                   Indicators
                   <ul class="carousel-indicators">
                       <li data-target="#demo" data-slide-to="0" class="active"></li>
                       <li data-target="#demo" data-slide-to="1"></li>
                       <li data-target="#demo" data-slide-to="2"></li>
                   </ul>
                   The slideshow
                   <div class="carousel-inner">
                       <div class="carousel-item active">
                           <img src="img/11.png" alt="Los Angeles">
                       </div>
                       <div class="carousel-item">
                           <img src="img/22.png" alt="Chicago">
                       </div>
                   </div>
                   Left and right controls
                   <a class="carousel-control-prev" href="#demo" data-slide="prev">
                       <span class="carousel-control-prev-icon"></span>
                   </a>
                   <a class="carousel-control-next" href="#demo" data-slide="next">
                       <span class="carousel-control-next-icon"></span>
                   </a>
               </div>
           </div>
               </header>
               <div class='container'>
           <div class="row">
               <div class="col-3 sort">
                   <ul>
                       <li><a href="/product" title="">ИКСС</a></li>
                       <li><a href="" title="">РТС</a></li>
                   </ul>
                   
                   
               </div>
               <div class="col-9">
                   <div class="row">
                       <div class="col-4 product">
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
                       </div>
                       <div class="col-4 product"></div>
                       <div class="col-4 product"></div>
                   </div>
                   <div class="row">
                       <div class="col-4 product"></div>
                       <div class="col-4 product"></div>
                       <div class="col-4 product"></div>
                   </div>
                   <div class="row">
                       <div class="col-4 product"></div>
                       <div class="col-4 product"></div>
                       <div class="col-4 product"></div>
                    </div>
                </div>
            </div>
                <nav class="pagination" style="float: left;">
        <li v-bind:class="[{disabled: !pagination.prev_page_url}]" class="page-item">
            <a class="page-link" href="#" @click="getItems(pagination.prev_page_url)">Previous</a></li>
        <li class="page-item disabled">
            <a class="page-link text-dark" href="#">Page {{pagination.current_page}} of {{pagination.last_page}}</a>
        </li>
        <li v-bind:class="[{disabled: !pagination.next_page_url}]" class="page-item">
            <a class="page-link" href="#" @click="getItems(pagination.next_page_url)">Next</a></li>
            </nav>
               </div> -->


    </main>
</template>

<style>
@media (min-width: 400px) and (max-width: 600px) {
    .price{
        margin-bottom: 60px;
    }
}

.img-stack-min{
    margin-top: 30px;
}

/* .img-stack-min img{
    max-height: 200px;
} */

.img-stack{
    margin-bottom: 20px;
}

.img-center{
    /* width: 225px; */
    justify-content: center;
    align-items: center;
    display: flex;
    /* margin-top: 10px; */
}

.img-stack-big img{
    min-height: 296px;
}

main{
    background: white;
}

header{
    /* text-align: center; */
    height: 60px;
    background: rgba(230, 190, 158, 1);
    width: 100%;
    /* color: #fff; */
}

/* .header-panel{
    background: transparent;
} */
    
.logo{
    height: 40px;
    /* background: green; */
}

.logo img {
    max-height: 40px;
    margin-top: 10px;
}

.menu{
    height: 40px;
}

.menu a{
    margin-top: 20px;
    color: black;
    display: inline-block;
}

.menu a:last-child{
    margin-left: 15px;
}

.search{
    height: 40px;
    /* padding-top: 15px; */
    /* background: gray; */
}

.search input{
    border: 1x solid black;
    border-radius: 10px 10px;
    white-space: nowrap;
    background: rgba(224, 208, 195, 1);
    padding-left: 5px;
    margin-top: 15px;
}

.search input:focus{
    outline: none;
}

.trash img{
    height: 40px;
    margin-top: 10px;
    margin-left: 15px;
    /* background: green; */
}

#demo{
    /* height: 240px; */
    /* background: pink; */
    margin-bottom: 40px;
    /* margin-top: 20px; */
}

.page-number{
    margin-top: 7px;
    font-style: italic;
}

.products-filter h4{
    font-weight: bold;
}

.products-filter a{
    text-decoration: none;
    display: block;
    color: black;
    font-size: 18px;
    color: rgba(38, 37, 36, 0.9);
    font-style: italic;
}

.products-filter a:hover{
    font-weight: bold;
    font-style: normal;
}

.product{
    height: 400px;
    border: 2px solid rgba(224, 208, 195, 1);
    position: relative;
    margin-bottom: 10px;
    margin-right: 5px;
    background: rgba(219, 199, 180, 1);
}

.product-block{
    padding: 5px;
}

.product-img{
    /* width: auto;
    height: auto; */
    /* justify-content: center;
    align-items: center;
    margin-top: 10px; */
    max-width: 1000px;
    max-height: 1000px;
}

.product-img img{
    width: 100%;
    height: auto;
    margin-top: 15px;
}

.item-name{
    margin-top: 20px;
    text-align: center;
}

.btn{
    color: #333;
    border-radius: 0;
    background: #fff;
    overflow: hidden;
    text-transform: uppercase;
    position: relative;
    z-index: 1;
    transition: all 0.40s ease 0s;
    margin-right: 15px;
    margin-left: 15px;
}
.btn:hover{
    color: #fff !important;
}
.btn.prev:after{
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    right: -100%;
    z-index: -1;
    transition: right 0.40s ease 0s;
}
.btn.prev:hover:after{
    right: 0;
}
.btn.orange.prev{
    border-right: 3px solid #f88030;
}
.btn.next:after{
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: -100%;
    z-index: -1;
    transition: left 0.40s ease 0s;
}
.btn.next:hover:after{
    left: 0;
}
.btn.orange.next{
    border-left: 3px solid #f88030;
}
.btn.orange:after{
    background: #f49c63;
}

.pagination{
    margin-top: 20px;
}

.buy{
    font-size: 22px;
    text-decoration: none;
    outline: none;
    display: inline-block;
    padding: 5px 15px;
    /* margin: 10px 20px; */
    position: relative;
    overflow: hidden;
    border: 2px solid #fe6637;
    border-radius: 8px;
    /* font-family: 'Montserrat', sans-serif;  */
    color: #fe6637;
    transition: .2s ease-in-out;
    position: absolute;
    right: 5px;
    bottom: 5px;
    /* position: relative; */
/*     top: 240px;
    right: 10px; */
}

.buy:before {
    content: "";
    background: linear-gradient(90deg, rgba(255,255,255,.1), rgba(255,255,255,.5));
    height: 70px;
    width: 70px;
    position: absolute;
    top: 0px;
    left: -105px;
    transform: skewX(-45deg);
}

.buy:hover {
    background: #fe6637;
    color: #fff; 
}

.buy:hover:before {
    left: 150px;
    transition: .5s ease-in-out;
}

.price{
    position: absolute;
    bottom: 15px;
    left: 10px;
    font-size: 20px;
}

.carousel-item img{
    max-width: 100%;
}

.carousel-control-prev-icon{
    /* background-color: black; */
}

.products-filter{
    margin-bottom: 20px;
}

.carousel-indicators li{
    width: 15px;
    height: 15px;
    border-radius: 50%;
/*     background-color: gray; */
}

.carousel-indicators .active{
    background-color: gray;
}

.nav-btn-prev{
    display: flex;
    justify-content: flex-start;
}

.nav-btn-next{
    display: flex;
    justify-content: flex-end;
}

.nav-btn-prev button, .nav-btn-next button{
    min-width: 50px;
    padding: 0 10px;
}

footer{
    height: 50px;
    background: rgba(56, 52, 49, 1);
}

.footer-panel{
    background: rgba(56, 52, 49, 1);
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

            


        //     Schema::create('users', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('name');
        //     $table->string('email')->unique();
        //     $table->timestamp('email_verified_at')->nullable();
        //     $table->string('password');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });



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