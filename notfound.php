
<html>
    <head>
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Potta+One&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;400&family=Potta+One&display=swap');
            @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');
            *{
                margin:0;
                padding:0;
                box-sizing: border-box;
            }
            body{
                background-color:rgb(0,25,80);
                width:100%;
                height:100vh;
                font-family:'Signika',sans-serif;
                color:white;
                display:flex;
                flex-direction:column;
                align-items:center;
                justify-content : center;
                text-align:center;
                font-size:3rem;
            }
            button{
                
                border:none;
                outline:none;
                padding:1rem 2rem;
                color:rgb(0,25,80);
                font-size:3rem
            }

        </style>
    </head>
    <body>
    <h1>Sorry page not found!</h1>
    <button>Back to main page</button>  

    </body>
</html>

<script>

    document.querySelector("button").addEventListener('click',()=>{
        window.location.href = "http://localhost/chiranjiv's%20eyes/"
    })
</script>