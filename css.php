<article class="chapter" data-name="css">
  <hgroup>
    <h1 class="chapter-title">CSS</h1>
    <h2 class="chapter-subtitle">+ Sass + Compass</h2>
  </hgroup>
  <p class="note">This chapter draws heavily on @fat's <a href="https://medium.com/@fat/mediums-css-is-actually-pretty-fucking-good-b8e2a6c78b06">"Medium's CSS is actually pretty f***ing good."</a> and the WordPress standards.</p>

  <section class="chapter-section" data-name="css-structure">
    <h2 class="chapter-section--title">Structure</h2>
    <ul>
      <li>Style by component, not by page. A component should be usable in any context, and be self contained.</li>
      <li>Each component should be styled in its own partial.</li>
    </ul>
  </section>
  <section class="chapter-section" data-name="css-type">
    <h2 class="chapter-section--title">Typography</h2>
    <ul>
      <li>Type styling should be defined in the project's _type.css partial. As much as possible, create a mixin to define a consistent type style for each level of the information hierarchy. Always @include the font @mixin and never use a font-style directly.</li>
      <li><pre>strong</pre> and <pre>em</pre> should be redefined using those font style definitions.</li>
      <li>Use ems and rems consistently, and use intelligent fractions for line heights, so that other components can be styled relative to the text.</li>
    </ul>
  </section>
  <section class="chapter-section" data-name="css-syntax">
    <h2 class="chapter-section--title">Syntax</h2>
    <ul>
      <li>Two spaces per level, one space after the colon.</li>
      <li>One selector, and one property, per line.</li>
    </ul>
<pre class="code code-scss columns-two section-good">
.code-css{
  background-color: $dark-grey;
  color: $white;
}
</pre>
<pre class="code code-scss columns-two section-bad">
.code-css{ background: $dark-grey; color:    $white;}
</pre>    
  </section>
</article>