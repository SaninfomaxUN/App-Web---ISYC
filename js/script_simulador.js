Vue.component('progress-circle', {
  data: function () {
    return {
      len: Math.PI * 2 * 40 };

  },
  props: {
    'size': {
      type: Number,
      default: 100 },

    'percent': {
      type: Number,
      default: 0 },

    'strokeWidth': {
      type: Number,
      default: 8 },

    'strokeColor': {
      type: String,
      default: '#108EE9' },

    'trailColor': {
      type: String,
      default: '#F7F7F7' },

    'trailWidth': {
      type: Number,
      default: 8 } },


  template: '#progress-circle',
  computed: {
    innerStyle: function () {
      return { width: `${this.size}px`, height: `${this.size}px` };
    },
    strokeStyle: function () {
      const currPercent = this.percent / 100 * this.len;
      return {
        'stroke': this.strokeColor,
        'stroke-dasharray': `${currPercent}px, ${this.len}px`,
        'stroke-width': `${this.strokeWidth}px` };

    },
    trailStyle: function () {
      return {
        'stroke': this.trailColor,
        'stroke-dasharray': `${this.len}px, ${this.len}px`,
        'stroke-width': `${this.trailWidth}px` };

    } } });



// start app
new Vue({
  el: '#app',
  template: '#main-page',
  data: {
    percent: 100,
    strokeColor: '#00A854',
    strokeWidth: 4,
    size: 250,
    pathLen: 0 },

  methods: {
    add: function () {
      this.percent += 10;
      if (this.percent >= 80) {
        this.strokeColor = '#00A854';
      }
      else if (this.percent < 80 && this.percent>=50){
        this.strokeColor = '#FFEE00';
      }
      else {
        this.strokeColor = '#F90417';
      }
      
     
      
      if (this.percent > 100) this.percent = 100;
    },
    dec: function () {
      this.percent -= 10;
      if (this.percent >= 80) {
        this.strokeColor = '#00A854';
      }
      else if (this.percent < 80 && this.percent>=50){
        this.strokeColor = '#FFEE00';
      }
      else {
        this.strokeColor = '#F90417';
      }
      if (this.percent < 0) this.percent = 0;
    },
    add100: function () {
			this.percent = 100;
			if(this.percent === 100){
				this.strokeColor = '#00A854';
			}
    },
    wssp: function(){
			this.percent-=Math.floor(25/6);
      if (this.percent >= 80) {
        this.strokeColor = '#00A854';
      }
      else if (this.percent < 80 && this.percent>=50){
        this.strokeColor = '#FFEE00';
      }
      else {
        this.strokeColor = '#F90417';
      }
			if(this.percent<0) this.percent = 0;
		},
		instagram: function(){
			this.percent-=Math.floor(50/3);
      if (this.percent >= 80) {
        this.strokeColor = '#00A854';
      }
      else if (this.percent < 80 && this.percent>=50){
        this.strokeColor = '#FFEE00';
      }
      else {
        this.strokeColor = '#F90417';
      }
			if(this.percent<0) this.percent = 0;
    },
    facebook: function(){
			this.percent-=50;
      if (this.percent >= 80) {
        this.strokeColor = '#00A854';
      }
      else if (this.percent < 80 && this.percent>=50){
        this.strokeColor = '#FFEE00';
      }
      else {
        this.strokeColor = '#F90417';
      }
			if(this.percent<0) this.percent = 0;
		},
   },

  mounted: function () {
    this.$nextTick(() => {
      this.pathLen = document.getElementById('successPath').getTotalLength();
      // console.log(this.pathLen)
    });
  },
  computed: {
    pathStyle: function () {
      const offset = this.percent === 100 ? 0 : this.pathLen;
      return {
        'stroke-dasharray': `${this.pathLen}px ${this.pathLen}px` };

    } } });