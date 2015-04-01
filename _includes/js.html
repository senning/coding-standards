<article class="chapter" data-name="javascript">
  <h1 class="chapter-title">Javascript</h1>
  <p>Our javascript should be fast, modular and reactive.</p>
  <section class="chapter-section">
    <h2 class="chapter-section--title">Syntax</h2>
    <p>Syntax: <code>js-&lt;targetName&gt;</code></p>
    <blockquote>JavaScript-specific classes reduce the risk that changing the structure or theme of components will inadvertently affect any required JavaScript behaviour and complex functionality.</blockquote>
    <cite><a href="https://gist.github.com/fat/a47b882eb5f84293c4ed#javascript">@fat</a></cite>
    <p>Any time you need to target an element, use a class prefixed with <code>js-</code>. Not a path, not a [name] attribute, not an ID. Things get moved over the course of development, fields get renamed to match different CRM setups, we'll want to listen to or modify multiple elements simultaneously.</p>
  </section>
  <section class="chapter-section">
    <h2 class="chapter-section--title">Principles</h2>
    <ul>
      <li>Listen for, and emit, events. This makes it much easier to build on code later, either for new features or for specific customizations.</li>
      <li>Only select the elements you need. Any elements you'll need more than once should be saved to a variable.</li>
      <li>Most variables should be scoped to their component or to the specific method. Avoid scoping to the whole jQuery.ready handler, and never use the global scope (except for passing in information from the page, ex. <code>wp_localize_script()</code>).</li>
    </ul>
  </section>
  <section class="chapter-section">
    <h2 class="chapter-section--title">Modularize</h2>
    <p>Components should be consistent with SCSS components and each be in their own file, to be compiled. Where components act on an element, they should be written as jQuery extensions. Where components act as an application, or part of an application, they should be standalone javascript objects.</p>
<div class="code-block">
<pre class="code code-js">
  //jQuery plugin
  ( function( $ ){
    $.fn.actor = function( options ){
      this.each( function(){
        function act(){
          …
        }
      } );
    } )
  } );
</pre>
<pre class="code code-js">
//Standalone, from <a href="https://hacks.mozilla.org/2014/08/black-box-driven-development-in-javascript/">MozHacks</a>
var App = function() {
    var api = {};
    api.init = function() {
        if(window.localStorage) {
            var products = window.localStorage.getItem('products') || [], content = '';
            for(var i=0; i&lt;products.length; i++) {
                content += products[i].name + '&lt;br /&gt;';
            }
            $('.content').html(content);
        } else {
            $('.error').css('display', 'block');
            $('.error').html('Error! Local storage is not supported.');
        }
        return api;
    }
    return api;
}
 
var application = App();
$(document).ready(application.init);
</pre>
    </div>    
  </section>
  
</article>