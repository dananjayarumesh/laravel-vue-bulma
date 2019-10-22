<template>

<div>
     <nav class="panel column is-offset-2 is-8">
    <p class="panel-heading">
      Contact Book
      <button class="button is-link is-outlined" @click="openAdd">Add New</button>
    </p>
    <div class="panel-block">
      <p class="control has-icons-left">
        <input class="input" type="text" placeholder="Search" />
        <span class="icon is-left">
          <i class="fas fa-search" aria-hidden="true"></i>
        </span>
      </p>
    </div>

    <a class="panel-block">
      <span class="column is-9">marksheet</span>

      <span class="column is-1">
        <button>View</button>
      </span>

      <span class="column is-1">
        <button>Edit</button>
      </span>

      <span class="column is-1">
        <button>Remove</button>
      </span>
    </a>

    <div class="panel-block"></div>
  </nav>
   <Addmodal :openmodal='addActive' @closeRequest='close'></Addmodal>
</div>
 
</template>

<script>
let Addmodal = require('./Add.vue');
export default {
    components:{
        Addmodal
    },
    data(){
        return{
            addActive: ''
        }
    },
    methods:{
        openAdd(){
            this.addActive = 'is-active'
        },
        close(){
            this.addActive = '';
        }
    }
}
</script>