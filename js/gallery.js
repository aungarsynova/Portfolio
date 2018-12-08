const vm = new Vue({
    el : ".gohere",
    data : {
       hoverText: " ",
    },

    created : function() {
        this.getImageData(null);
    },

    methods: {
        getImageData(e) {
            //debugger;
            let targetURL = `./includes/gal.php`;

            fetch(targetURL)
            .then(res => res.json())
            .then(data => {
                console.log(data)
                //run a function to parse our data
                this.showImageData(data[0]);//run a fucntion to put the data on the page
            })
            .catch(function(error) {
                console.error(error);

            });
        },
        // gal() {
        //    //debugger;    
        //    this.show=true; 
        // },
        
    showImageData(data) {
        //change VM content here and make it show up on the page
       this.hoverText = data.text
      
     }
    }
});

function parseImageData(text) {
    //destructure thed database info and grab just what we need
    const { text } = hoverText;
    //take the database data and put it on the page
    document.querySelector(".gohere").textContent = text;
    
};

var boxReveal = {
  delay    : 200,
  distance : '50px',
  rotate   : { z: 6 }
};

window.sr = ScrollReveal();
sr.reveal('.gal-image', boxReveal);