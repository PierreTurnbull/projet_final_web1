<template>
  <canvas></canvas>
</template>
<script>
export default {
  name : 'canvasBg',
  data(){
    return {
      c : null,
      img : new Image(),
      reverse : false,
      imgY : 200,
      reverse2 : true,
      imgY2 : 60,
      reverse3 : true,
      imgY3 : 200,
      bg : new Image(),
      ship : new Image(),
      imgWindow : new Image(),
      mouse : {
        x : 0,
        y : 0,
      }
    }
  },
  mounted(){
    window.addEventListener('resize', this.resize);
    window.addEventListener('mousemove', this.moving);
    this.c = this.$el.getContext('2d');
    this.$el.width = innerWidth;
    this.$el.height = innerHeight;
    this.img.src = require('./assets/astro2.png');
    this.bg.src = require('./assets/earth2.jpg');
    this.ship.src = require('./assets/ship.png');
    this.imgWindow.src = require('./assets/window.png');

    this.animate();
  },
  methods:{
    animate(){
      requestAnimationFrame(this.animate);

      this.c.clearRect(0, 0, this.$el.width, this.$el.height);

      if (!this.reverse && this.imgY >= 180) {
        this.imgY += 0.1;
        if (this.imgY >= 210) {
          this.reverse = true;
        }
      } else if (this.reverse) {
        this.imgY -= 0.1;
        if (this.imgY <= 190) {
          this.reverse = false;
        }
      }

      if (!this.reverse2 && this.imgY2 >= 40) {
        this.imgY2 += 0.1;
        if (this.imgY2 >= 70) {
          this.reverse2 = true;
        }
      } else if (this.reverse2) {
        this.imgY2 -= 0.1;
        if (this.imgY2 <= 50) {
          this.reverse2 = false;
        }
      }

      if (!this.reverse3 && this.imgY3 >= 180) {
        this.imgY3 += 0.1;
        if (this.imgY3 >= 210) {
          this.reverse3 = true;
        }
      } else if (this.reverse3) {
        this.imgY3 -= 0.1;
        if (this.imgY3 <= 190) {
          this.reverse3 = false;
        }
      }

      //Earth
      this.c.drawImage(
        this.bg,
        -70 + this.mouse.x / 100,
        -70 + this.mouse.y / 100,
        this.$el.width + 120,
        ((this.$el.width + 120) * this.bg.height) / this.bg.width,
      );

      //Charactere

      this.c.drawImage(
        this.ship,
        500 + this.mouse.x / 50,
        this.imgY3 + this.mouse.y / 50,
        800,
        (800 * this.ship.height) / this.ship.width,
      );

      this.c.drawImage(
        this.img,
        600 + this.mouse.x / 50,
        this.imgY + this.mouse.y / 50,
        300,
        (300 * this.img.height) / this.img.width,
      );

      this.c.drawImage(
        this.img,
        200 + this.mouse.x / 50,
        this.imgY2 + this.mouse.y / 50,
        500,
        (500 * this.img.height) / this.img.width,
      );

      //Window
      this.c.drawImage(
        this.imgWindow,
        -70 + this.mouse.x / 15,
        -60 + this.mouse.y / 15,
        this.$el.width + 120,
        ((this.$el.width + 120) * this.imgWindow.height) / this.imgWindow.width,
      );

      this.c.fillStyle = 'rgba(0,0,0,0.4)';
      this.c.fillRect(0, 0, this.$el.width, this.$el.height);
    },
    moving(e){
      this.mouse.x = e.pageX - this.$el.width / 2;
      this.mouse.y = e.pageY - this.$el.height / 2;
    },
    resize(){
      this.$el.width = innerWidth;
      this.$el.height = innerHeight;
    }
  }
}
</script>

