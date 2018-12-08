//MAIN
const vm = new Vue({
    el : "#text-main2",
    data : {
       mainText: " ",
    },

    created : function() {
        this.getData(null);
    },

    methods: {
        getData(e) {
            //debugger;
            let targetURL = `./includes/about.php`;

            fetch(targetURL)
            .then(res => res.json())
            .then(data => {
                console.log(data)
                //run a function to parse our data
                this.showTextData(data[0]);//run a fucntion to put the data on the page
            })
            .catch(function(error) {
                console.error(error);

            });
        },
        show() {
           //debugger;    
           this.show=true; 
        },
        
    showTextData(data) {
        //change VM content here and make it show up on the page
       this.mainText = data.text
      
     }
    }
});

function parseTextData(text) {
    //destructure thed database info and grab just what we need
    const { text } = mainText;
    //take the database data and put it on the page
    document.querySelector(".input2").textContent = text;
    
};


anime({
    targets: '.input2',
    opacity: 1,
    translateY: 15,
    easing: 'linear',
    duration: 1000,
    autoplay: true
   
  });

  var infiniteLoopReverse = anime({
    targets: '.part .svg-graphic',
    translateY: 10,
    direction: 'alternate',
    loop: true
    
  });

  ScrollReveal().reveal('.part', { delay: 500 });

 


