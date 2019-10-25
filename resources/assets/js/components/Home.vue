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

      <a class="panel-block" v-for="item,key in list">
        <span class="column is-9">{{key+1}} {{item.name}}</span>

        <span class="column is-1">
          <button @click="openShow(key)">View</button>
        </span>

        <span class="column is-1">
          <button >Edit</button>
        </span>

        <span class="column is-1">
          <button>Remove</button>
        </span>
      </a>

      <div class="panel-block"></div>
    </nav>
    <Addmodal :openmodal="addActive" @closeRequest="close"></Addmodal>
    <Showmodal :openshowmodal="showActive" @closeRequest="close"></Showmodal>
  </div>
</template>

<script>
let Addmodal = require("./Add.vue");
let Showmodal = require("./Show.vue");
export default {
  components: {
    Addmodal,
    Showmodal
  },
  data() {
    return {
      addActive: "",
      showActive: "",
      list: {},
      errors: {}
    };
  },
  mounted() {
    axios
      .post(BASE_URL + "/phonebook/getData")
      .then(response => {
        this.list = response.data;
        // console.log(response);
      })
      .catch(error => {
        this.errors = error.response.data.errors;
        console.log(error);
      });
  },
  methods: {
    openAdd() {
      this.addActive = "is-active";
    },
    openShow(key) {
      // console.log(this.$childern);
      
      // get $children
      // console.log(this.$children);
      
      this.$children[1].list = this.list[key];

      this.showActive = "is-active";
    },
    close() {
      this.addActive = "";
      this.showActive = "";
    }
  }
};
</script>