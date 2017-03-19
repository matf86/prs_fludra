<template>
  <div class="mini_card">
    <div class="mini_card_header" @click="toggleTooltip">
      <h4>{{title}}</h4>      
    </div>
    <div class="mini_card_body" v-show="this.active">
        <slot name="body"></slot>
    </div>
  </div>
</template>

<script>
  
export default {
  props:['title'],
  data() {
    return {
      active: false
    }
  },
  methods: {
    toggleTooltip() {
      this.active = !this.active;
    },
  }
}

</script>
<style>

.mini_card {
  position: relative;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.25);
  transition: 0.4s;
  width: 100%;
  opacity: 0.85;  
}

.mini_card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    opacity: 1;
    cursor: pointer;
}

.mini_card_header {
  position: relative;
  text-align: center;
  background-color: rgb(218, 97, 97);
}

.mini_card_header h4 {
  color:transparent;
  font-family: 'Mogra', sans-serif;
  padding: 10px;
  color: rgba(255, 255, 255, 1);
}

.mini_card_body {
    background: #333;
    background: rgba(0,0,0,.8);
    border-radius: 5px;
    bottom: 115%;
    color: #fff;
    left: 10%;
    padding: 5px 15px;
    position: absolute;
    z-index: 98;
}
.mini_card_body:before {
    border: solid;
    border-color: #333 transparent;
    border-width: 6px 6px 0 6px;
    bottom: -5px;
    content: "";
    left: 20%;
    position: absolute;
    z-index: 99;
}
</style>