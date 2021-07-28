<!DOCTYPE html>
<html>

<head>
    <title>치킨 추천 받자</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="http://localhost/style.css">
</head>

<body id="target">
    <header>
        <h1><a href="http://localhost/index.php">치킨</a></h1>
    </header>

    <nav>
        <ul>
            <?php
            echo file_get_contents('list.txt');
            ?>
        </ul>
    </nav>
    <div id="control">
        <input type="button" value="white" id="white_btn"/>
        <input type="button" value="black" id="black_btn"/>
    </div>
<article>
<?php
if(empty($_GET['id'])==false){
    echo file_get_contents($_GET['id'].".txt");
}

?>
    <div id="disqus_thread"></div>
    <script>
        /**
        *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
        /*
        var disqus_config = function () {
        this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };
        */
        (function() { // DON'T EDIT BELOW THIS LINE
        var d = document, s = d.createElement('script');
        s.src = 'https://cikincuceonsaiteumandeulgi.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</article>
<script>
    wbtn = document.getElementById('white_btn');
    wbtn.addEventListener('click',function(){
        document.getElementById('target').className='white';
    })
    bbtn = document.getElementById('black_btn');
    bbtn.addEventListener('click',function(){
        document.getElementById('target').className='black';
    })
</script>
</body>

</html>