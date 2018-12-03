<template>
<body>
    <header id="header" class="container">
        <div class='row'>
            <div class='col-3 logo'></div>
            <div class='col-2'></div>
            <div class='col-3 FAQ'></div>
            <div class="col-3 search"></div>
            <div class="col-1 trash"></div>
        </div>
        <div class="row">
            <div class="col-12 picture_in_header"></div>
        </div>
    </header>
    <!-- <main class='articles'> -->
    <main class='container'>
        <div class="row">
            <!-- <div v-for='category in categories' v-bind:key='category.id' class="col-3 sort_FAQ">
                <div>{{ category.title }}</div> -->
            </div>
            <div class="col-3 product"></div>
            <div class="col-3 product"></div>
            <div class="col-3 product"></div>
        </div>
        <div class="row">
            <div class="col-md-3 sort"></div>
            <div class="col-md-9 sr">
                <div class="row">
                    <div class="col-4"></div>
                    <div class="col-4"></div>
                    <div class="col-4"></div>
                </div>
                <div class="row">
                    <div class="col-4 r"></div>
                    <div class="col-4 r"></div>
                    <div class="col-4 r"></div>
                </div>
            </div>
        </div>
        <!-- <article v-for="article in articles" v-bind:key="article.id">
            <h3>{{ article.title }}</h3>
            <span>{{ article.created_at | moment("DD.MM.YYYY") }}</span>
            <h4>Categories:</h4>
            <ul>
                <li v-for="category in article.categories" v-bind:key="category.id">
                    <a href="#">{{category.title}}</a>
                </li>
            </ul>
            <p>
                {{ article.content }}
            </p>
            <button @click="deleteArticle(article.id)" class="btn btn-danger">Delete</button>
        </article> -->
    </main>
    <footer class='container-fluid'>
        <div class='container'>
            
        </div>
    </footer>
</body>
</template>
<style></style>
<script>
import { API } from "../api-common.js";
</script>