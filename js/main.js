const vm = new Vue({
    el : "#text-main",
    data : {
       mainText: " "
        
    },
     created : function() {
        this.getData(null);
    },
     methods: {
        getData(e) {
            //debugger;
            let targetURL = `./includes/connect.php`;
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
    document.querySelector(".inputmain").textContent = text;
    
};


anime({
    targets: '.inputmain',
    opacity: 1,
    translateY: -30,
    easing: 'linear',
    duration: 3000,
    autoplay: true
   
  });

 

