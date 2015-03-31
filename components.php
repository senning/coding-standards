<article class="chapter" data-name="components">
  <h1 class="chapter-title">Components</h1>
  <p class="note">This chapter draws heavily on @fat's <a href="https://medium.com/@fat/mediums-css-is-actually-pretty-fucking-good-b8e2a6c78b06">"Medium's CSS is actually pretty f***ing good."</a> and the WordPress standards.</p>
  <p>Syntax: <code>componentName[-descendantName][--subDescendantName]</code></p>
  <section class="chapter-section">
    <h2 class="chapter-section--title">Keep it together</h2>
    <p>Everything - JS, PHP classes/plugins, CSS and SASS partials - should be scoped to a component. By being conscious of the shape and borders of our components (and the interactions between them), we can minimize bad interactions between them.</p>
    <p>Generally, that will be a one-to-one(-to-one-to-one) relationship, with one PHP class generating a component, styled by one SASS partial, controlled by one JS closure. For more complex components, it may be better to break that off in to multiple PHP classes (ex., a controller and specific view handlers) or multiple JS closures (ex., one to handle the common elements, others to handle each specific case ).</p>
  </section>
  
</article>