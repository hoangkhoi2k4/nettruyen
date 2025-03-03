<template>
  <div class="container" id="intro-index">
    <section1 :storyHot="storyHot"></section1>
    <section2 :storyNewUpdate="storyNewUpdate"></section2>
  </div>
  <div class="container" id="intro-index">
    <section3 :storyNew="storyNew"></section3>
  </div>
</template>
 
<script>
import axios from 'axios';
import Section1 from './Home/StoriesHot.vue';
import Section2 from './Home/StoriesNewUpdate.vue';
import Section3 from './Home/StoriesNew.vue';


export default {
  components: {
    Section1,
    Section2,
    Section3
  },
  data() {
    return {
      storyHot: [],
      storyNewUpdate: [],
      storyNew: []
    };
  },
  mounted() {
    axios.get('http://127.0.0.1:8000/api/home')
      .then(response => {
        this.storyHot = response.data.storyHot;
        this.storyNew = response.data.storyNew;
        this.storyNewUpdate = response.data.storyNewUpdate;
      })
      .catch(error => {
        console.error("Lỗi khi tải dữ liệu:", error);
      });
  }
};
</script>