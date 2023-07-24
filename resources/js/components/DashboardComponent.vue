<template>
<div class="row" id="main-page">
   <div class="col-md-3 sidebar-shadow" >
      <div class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom justify-content-between">
         <div ><i class="fa-solid fa-user"></i></div>
         <div class="fs-5 fw-semibold">{{ user.name }}</div>
         <div class="fs-5 fw-semibold">
            <form @submit="logout" method="post" id="logout-form">
                <button type="submit"><i class="fa-solid fa-gear"></i></button>
            </form>
        </div>
      </div>
      <div class="list-group list-group-flush border-bottom scrollarea">
         <a href="#" class="list-group-item list-group-item-action py-3 lh-tight" aria-current="true" v-for="chat in chats" :key="chat.uid" @click="Select(chat)">
            <div class="d-flex w-100 align-items-center justify-content-between">
               <strong class="mb-1">{{chat.name}}</strong>
               <small>Wed</small>
            </div>
            <div class="col-10 mb-1 small">{{chat.message}}</div>
         </a>
      </div>
   </div>
   <!-- main content -->
   <div class="col-md-9">
        <div class="header px-3">
            <nav class="navbar navbar-light bg-light " v-if="has_selected_chat">
           
            <a class="navbar-brand">{{selected_chat.name}}</a>
                <form class="form-inline d-flex">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </nav>
        </div>

        <!-- write message -->
        <div class="compose-message" v-if="has_selected_chat">
            <div class="d-flex">
            <div class="icon-container">
                <textarea name="" id="" cols="30" rows="1"></textarea>
                <i class="fas fa-paper-plane"></i> <!-- Replace 'fa-paper-plane' with the desired Font Awesome icon name -->
            </div>
            </div>
        </div>


   </div>
</div>
</template>

<script>
import axios from 'axios';
    export default {
        props: ['user'],
        mounted() {
           
           
        },
        data(){
            return {
                chats:[
                    {uid:1,name:'Full Name',message:'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, accusantium!'},
                    {uid:2,name:'Full Name',message:'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, accusantium!'},
                    {uid:3,name:'Full Name',message:'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, accusantium!'},
                    {uid:4,name:'Full Name',message:'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, accusantium!'},
                    {uid:5,name:'Full Name',message:'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, accusantium!'},
                    {uid:7,name:'Full Name',message:'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, accusantium!'},
                    {uid:8,name:'Full Name',message:'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, accusantium!'},
                    {uid:9,name:'Full Name',message:'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, accusantium!'},
                    {uid:10,name:'Full Name',message:'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, accusantium!'},
                    {uid:6,name:'Full Name',message:'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum, accusantium!'}
                ],
                selected_chat:'null',
                has_selected_chat:false,
            }
        },
        methods:{
            Select(chat){
                this.selected_chat = chat;
                this.has_selected_chat = true;
            },
            logout() {
                axios.post('/logout')
                .then(response => {
                    window.location.href = '/';
                })
                .catch(error => {
                // Handle the logout error if needed
                console.error(error);
                });
            }
          
        },
        updated(){
          
        }
    }
</script>