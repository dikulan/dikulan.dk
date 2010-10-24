---
parent: main
title: {{ title }}
---

<div class="newsitem">

  <h2>{{ title }}</h2>

  <time>{{ timestamp }}</time>

  <article>{{ content }}</article>

  <div id="disqus_thread"></div>
<script type="text/javascript">
  //var disqus_identifier = "{{ id }}-{{ slug }}";
  (function() {
   var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
   dsq.src = 'http://dikulan.disqus.com/embed.js';
   (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
  })();
</script>
<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript=dikulan">comments.</a></noscript>

</div>
