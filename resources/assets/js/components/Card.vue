<template>
  <div class="card">
    <div class="card_header">
      <h3>{{title}}</h3>      
    </div>
    <div class="card_body">
      <slot name="body"></slot>
    </div>
  </div>
</template>

<script>
  
export default {
  props:['title'],
  data() {
    return {}
  }
}

</script>

<style>

.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.25);
    transition: 0.4s;
    width: 100%;
    opacity: 0.85;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    opacity: 1;
}

.card_header {
  position: relative;
  text-align: center;
  background-color: rgb(218, 97, 97);
}

.card_header:after {
    content:'';
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -10px;
    width: 0;
    height: 0;
    border-top: solid 10px rgb(218, 97, 97);
    border-left: solid 10px transparent;
    border-right: solid 10px transparent;
}

.card_header h3 {
  color:transparent;
  font-family: $secondary-font;
  padding: 10px;
  color: rgba(255, 255, 255, 1);
}

.card_body {
  padding: 2px 16px;
}
</style>

