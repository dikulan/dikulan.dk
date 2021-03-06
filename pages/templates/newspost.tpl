---
parent: main
title: {{ title }}
---

<div class="newsitem">

  <h1 class="newstitle">{{ title }}</h2>

  <time>{{ timestamp }}</time>

  <article>{{ content }}</article>
<hr>
<div id="disqus_thread"></div>
<script type="text/javascript">
  /**
    * var disqus_identifier; [Optional but recommended: Define a unique identifier (e.g. post id or slug) for this thread] 
    */
var disqus_developer = 1;
  (function() {
   var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
   dsq.src = 'http://dikulan.disqus.com/embed.js';
   (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
  })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript=dikulan">comments powered by Disqus.</a></noscript>
<a href="http://disqus.com" class="dsq-brlink"></a>


</div>
