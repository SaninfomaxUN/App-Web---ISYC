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



// Script Calculo
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
    redu: function () {

      var VW = parseInt((document.getElementById('PorcentajeWssp')).value);
      var VF = parseInt((document.getElementById('PorcentajeFace')).value);
      var VI = parseInt((document.getElementById('PorcentajeInsta')).value);
      var VT = parseInt((document.getElementById('PorcentajeTw')).value);
      var VY = parseInt((document.getElementById('PorcentajeYout')).value);
      var VTik = parseInt((document.getElementById('PorcentajeTik')).value);
      var VG = parseInt((document.getElementById('PorcentajeGame')).value);

      var inputH = document.getElementById('inputHoras');
      var inputM = document.getElementById('inputMinutes');

      var Horas=Math.floor(inputH.value)*60;
      var Porcentaje=Math.floor((inputM.value)*100/Horas);

      var sum = Porcentaje + VW + VF + VI + VT + VY + VTik +VG;

      if (((inputH.value).length > 0 && (inputM.value).length > 0) && (inputH.value>0 && inputM.value>0) && (sum<=100)){

        $(document.getElementById('inputHoras')).prop('readonly', true);

        inputH.style.borderColor = "#afafaf";
        inputM.style.borderColor = "#afafaf";

        reduDuration=Math.floor(inputH.value)*60;
        reduMinutes=Math.floor((inputM.value)*100/reduDuration);

        this.percent -= reduMinutes;
        if (this.percent >= 80) {
          this.strokeColor = '#00A854';
        }
        else if (this.percent < 80 && this.percent>=55){
          this.strokeColor = '#FFEE00';
        }
        else {
          this.strokeColor = '#F90417';
        }
        if (this.percent < 0) this.percent = 0;

        return true

      }else{
        if ((inputH.value).length == 0 || inputH.value<=0){
          inputH.style.borderColor = "#ff0000";  
        }else{
          inputH.style.borderColor ="#afafaf";
        }
        if ((inputM.value).length == 0 || inputM.value<=0){
          inputM.style.borderColor = "#ff0000";
        }else{
          inputM.style.borderColor ="#afafaf";
        }
        if (sum>100){
          inputM.style.borderColor ="#FFFF00";
        }

        return false
        
      }
    },
    /*
    add: function () {
      this.percent += 10;
      if (this.percent >= 80) {
        this.strokeColor = '#00A854';
      }
      else if (this.percent < 80 && this.percent>=55){
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
      else if (this.percent < 80 && this.percent>=55){
        this.strokeColor = '#FFEE00';
      }
      else {
        this.strokeColor = '#F90417';
      }
      if (this.percent < 0) this.percent = 0;
    },
    */
    Restart: function () {

      $(document.getElementById('inputHoras')).prop('readonly', false);

      document.getElementById('inputHoras').style.borderColor = "#afafaf";
      (document.getElementById('inputMinutes')).style.borderColor = "#afafaf";

      document.getElementById('horasForm1').reset();
      document.getElementById('minutosForm1').reset();

      document.getElementById('PorcentajeWssp').value = 0
      document.getElementById('PorcentajeFace').value = 0
      document.getElementById('PorcentajeInsta').value = 0
      document.getElementById('PorcentajeTw').value = 0
      document.getElementById('PorcentajeYout').value = 0
      document.getElementById('PorcentajeTik').value = 0
      document.getElementById('PorcentajeGame').value = 0

			this.percent = 100;
			this.strokeColor = '#00A854';
    },
    wssp: function(){
      var comprobacion = this.redu();
      if (comprobacion == true){
        var valor = parseInt((document.getElementById('PorcentajeWssp')).value);
        var wsspPercent = valor + reduMinutes;
        (document.getElementById('PorcentajeWssp')).value = wsspPercent;
      }                 
    },
    facebook: function(){
      var comprobacion = this.redu();
      if (comprobacion == true){
        var valor = parseInt((document.getElementById('PorcentajeFace')).value);
        var facePercent = valor + reduMinutes;
        (document.getElementById('PorcentajeFace')).value = facePercent;
      }  
    },
    instagram: function(){
      var comprobacion = this.redu();
      if (comprobacion == true){
        var valor = parseInt((document.getElementById('PorcentajeInsta')).value);
        var instaPercent = valor + reduMinutes;
        (document.getElementById('PorcentajeInsta')).value = instaPercent;
      }  
    },
    twitter: function(){
      var comprobacion = this.redu();
      if (comprobacion == true){
        var valor = parseInt((document.getElementById('PorcentajeTw')).value);
        var twPercent = valor + reduMinutes;
        (document.getElementById('PorcentajeTw')).value = twPercent;
      }  
    },
    youtube: function(){
      var comprobacion = this.redu();
      if (comprobacion == true){
        var valor = parseInt((document.getElementById('PorcentajeYout')).value);
        var youtPercent = valor + reduMinutes;
        (document.getElementById('PorcentajeYout')).value = youtPercent;
      }  
    },
    tiktok: function(){
      var comprobacion = this.redu();
      if (comprobacion == true){
        var valor = parseInt((document.getElementById('PorcentajeTik')).value);
        var tikPercent = valor + reduMinutes;
        (document.getElementById('PorcentajeTik')).value = tikPercent;
      }  
    },
    game: function(){
      var comprobacion = this.redu();
      if (comprobacion == true){
        var valor = parseInt((document.getElementById('PorcentajeGame')).value);
        var gamePercent = valor + reduMinutes;
        (document.getElementById('PorcentajeGame')).value = gamePercent;
      }  
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

// Script Programacion
new Vue({
  el: '#app2',
  template: '#main-page2',
  data: {
    percent: 100,
    strokeColor: '#00A854',
    strokeWidth: 4,
    size: 250,
    pathLen: 0 },

  methods: {
    redu: function () {

      var VW = parseInt((document.getElementById('PorcentajeWssp2')).value);
      var VF = parseInt((document.getElementById('PorcentajeFace2')).value);
      var VI = parseInt((document.getElementById('PorcentajeInsta2')).value);
      var VT = parseInt((document.getElementById('PorcentajeTw2')).value);
      var VY = parseInt((document.getElementById('PorcentajeYout2')).value);
      var VTik = parseInt((document.getElementById('PorcentajeTik2')).value);
      var VG = parseInt((document.getElementById('PorcentajeGame2')).value);

      var inputH = document.getElementById('inputHoras2');
      var inputM = document.getElementById('inputMinutes2');

      var Horas=Math.floor(inputH.value)*60;
      var Porcentaje=Math.floor((inputM.value)*100/Horas);

      var sum = Porcentaje + VW + VF + VI + VT + VY + VTik +VG;

      if (((inputH.value).length > 0 && (inputM.value).length > 0) && (inputH.value>0 && inputM.value>0) && (sum<=100)){

        $(document.getElementById('inputHoras2')).prop('readonly', true);

        inputH.style.borderColor = "#afafaf";
        inputM.style.borderColor = "#afafaf";

        reduDuration=Math.floor(inputH.value)*60;
        reduMinutes=Math.floor((inputM.value)*100/reduDuration);

        this.percent -= reduMinutes;
        if (this.percent >= 80) {
          this.strokeColor = '#00A854';
        }
        else if (this.percent < 80 && this.percent>=55){
          this.strokeColor = '#FFEE00';
        }
        else {
          this.strokeColor = '#F90417';
        }
        if (this.percent < 0) this.percent = 0;

        return true

      }else{
        if ((inputH.value).length == 0 || inputH.value<=0){
          inputH.style.borderColor = "#ff0000";  
        }else{
          inputH.style.borderColor ="#afafaf";
        }
        if ((inputM.value).length == 0 || inputM.value<=0){
          inputM.style.borderColor = "#ff0000";
        }else{
          inputM.style.borderColor ="#afafaf";
        }
        if (sum>100){
          inputM.style.borderColor ="#FFFF00";
        }

        return false
        
      }
    },
    /*
    add: function () {
      this.percent += 10;
      if (this.percent >= 80) {
        this.strokeColor = '#00A854';
      }
      else if (this.percent < 80 && this.percent>=55){
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
      else if (this.percent < 80 && this.percent>=55){
        this.strokeColor = '#FFEE00';
      }
      else {
        this.strokeColor = '#F90417';
      }
      if (this.percent < 0) this.percent = 0;
    },
    */
    Restart: function () {

      $(document.getElementById('inputHoras2')).prop('readonly', false);

      document.getElementById('inputHoras2').style.borderColor = "#afafaf";
      (document.getElementById('inputMinutes2')).style.borderColor = "#afafaf";

      document.getElementById('horasForm2').reset();
      document.getElementById('minutosForm2').reset();

      document.getElementById('PorcentajeWssp2').value = 0
      document.getElementById('PorcentajeFace2').value = 0
      document.getElementById('PorcentajeInsta2').value = 0
      document.getElementById('PorcentajeTw2').value = 0
      document.getElementById('PorcentajeYout2').value = 0
      document.getElementById('PorcentajeTik2').value = 0
      document.getElementById('PorcentajeGame2').value = 0

			this.percent = 100;
			this.strokeColor = '#00A854';
    },
    wssp: function(){
      var comprobacion = this.redu();
      if (comprobacion == true){
        var valor = parseInt((document.getElementById('PorcentajeWssp2')).value);
        var wsspPercent = valor + reduMinutes;
        (document.getElementById('PorcentajeWssp2')).value = wsspPercent;
      }                 
    },
    facebook: function(){
      var comprobacion = this.redu();
      if (comprobacion == true){
        var valor = parseInt((document.getElementById('PorcentajeFace2')).value);
        var facePercent = valor + reduMinutes;
        (document.getElementById('PorcentajeFace2')).value = facePercent;
      }  
    },
    instagram: function(){
      var comprobacion = this.redu();
      if (comprobacion == true){
        var valor = parseInt((document.getElementById('PorcentajeInsta2')).value);
        var instaPercent = valor + reduMinutes;
        (document.getElementById('PorcentajeInsta2')).value = instaPercent;
      }  
    },
    twitter: function(){
      var comprobacion = this.redu();
      if (comprobacion == true){
        var valor = parseInt((document.getElementById('PorcentajeTw2')).value);
        var twPercent = valor + reduMinutes;
        (document.getElementById('PorcentajeTw2')).value = twPercent;
      }  
    },
    youtube: function(){
      var comprobacion = this.redu();
      if (comprobacion == true){
        var valor = parseInt((document.getElementById('PorcentajeYout2')).value);
        var youtPercent = valor + reduMinutes;
        (document.getElementById('PorcentajeYout2')).value = youtPercent;
      }  
    },
    tiktok: function(){
      var comprobacion = this.redu();
      if (comprobacion == true){
        var valor = parseInt((document.getElementById('PorcentajeTik2')).value);
        var tikPercent = valor + reduMinutes;
        (document.getElementById('PorcentajeTik2')).value = tikPercent;
      }  
    },
    game: function(){
      var comprobacion = this.redu();
      if (comprobacion == true){
        var valor = parseInt((document.getElementById('PorcentajeGame2')).value);
        var gamePercent = valor + reduMinutes;
        (document.getElementById('PorcentajeGame2')).value = gamePercent;
      }  
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