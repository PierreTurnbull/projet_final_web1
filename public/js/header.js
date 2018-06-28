function Canvas() {
  if (document.querySelector('.PageHeader canvas')) {
    document.querySelector('.PageHeader canvas').remove();
  }
  this.$el = document.createElement('canvas');
  this.c = this.$el.getContext('2d');
  this.$el.width = window.innerWidth;
  this.$el.height =
    window.innerHeight - document.querySelector('.Navigation').offsetHeight;
  document.querySelector('.PageHeader').appendChild(this.$el);

  this.init = () => {
    this.links = [
      {
        url: 'img/earth2.jpg',
        animate: false,
        direction: false,
        offsetTop: -70,
        offsetLeft: -70,
        width: this.$el.width + 120,
        coef: 100
      },
      {
        url: 'img/ship.png',
        animate: true,
        direction: false,
        offsetTop: (this.$el.height * 20) / 100,
        offsetLeft: (this.$el.width * 50) / 100,
        width: 500,
        coef: 50
      },
      {
        url: 'img/astro2.png',
        animate: true,
        direction: true,
        offsetTop: (this.$el.height * 10) / 100,
        offsetLeft: (this.$el.width * 20) / 100,
        width: 500,
        coef: 50
      },
      {
        url: 'img/window.png',
        animate: false,
        direction: false,
        offsetTop: -70,
        offsetLeft: -70,
        width: this.$el.width + 120,
        coef: 15
      }
    ];

    this.imgs = [];

    this.links.forEach((link) => {
      this.imgs.push(
        new ImageComponents({
          context: this.c,
          url: link.url,
          direction: link.direction,
          offsetTop: link.offsetTop,
          offsetLeft: link.offsetLeft,
          animate: link.animate,
          width: link.width,
          coef: link.coef
        })
      );
    });
  };

  this.resize = () => {
    this.$el.width = innerWidth;
    this.$el.height = innerHeight;

    this.init();
  };

  this.animate = () => {
    requestAnimationFrame(this.animate);

    this.c.clearRect(0, 0, this.$el.width, this.$el.height);

    this.imgs.forEach((img) => {
      img.draw();
    });

    this.c.fillStyle = 'rgba(0,0,0,0.55)';
    this.c.fillRect(0, 0, this.$el.width, this.$el.height);
  };

  this.init();

  window.addEventListener('resize', this.resize);
}

function ImageComponents({
  context: context,
  url: url,
  direction: direction,
  offsetTop: y,
  offsetLeft: x,
  animate: animate,
  width: width,
  coef: coef
}) {
  this.$el = new Image();
  this.$el.src = url;
  this.reverse = direction;
  this.imgY = y;
  this.imgX = x;
  this.imgYmax = y + 10;
  this.imgYmin = y - 10;
  this.coef = coef;
  this.width = width;
  this.animate = animate;
  this.c = context;

  this.draw = () => {
    if (animate) {
      if (!this.reverse && this.imgY >= this.imgYmin - 10) {
        this.imgY += 0.1;
        if (this.imgY >= this.imgYmax) {
          this.reverse = true;
        }
      } else if (this.reverse) {
        this.imgY -= 0.1;
        if (this.imgY <= this.imgYmin) {
          this.reverse = false;
        }
      }
    }

    this.c.drawImage(
      this.$el,
      this.imgX + mouse.x / this.coef,
      this.imgY + mouse.y / this.coef,
      this.width,
      (this.width * this.$el.height) / this.$el.width
    );
  };
}

function Mouse() {
  this.x = null;
  this.y = null;

  this.position = (e) => {
    this.x = e.pageX - window.innerWidth / 2;
    this.y = e.pageY - window.innerHeight / 2;
  };

  window.addEventListener('mousemove', this.position);
}

function firstInit() {
  if (window.matchMedia('(min-width: 64em)').matches) {
    if (window.canvas) {
      return;
    }
    window.canvas = new Canvas();
    window.mouse = new Mouse();
    window.canvas.animate();
  } else {
    if (document.querySelector('.PageHeader canvas')) {
      document.querySelector('.PageHeader canvas').remove();
    }
    window.canvas = null;
    window.mouse = null;
  }
}

firstInit();

window.addEventListener('resize', firstInit);
