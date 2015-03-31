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
      <li>Type styling should be defined in the project's _type.scss partial. As much as possible, create a mixin to define a consistent type style for each level of the information hierarchy. Always @include the font @mixin and never use a font-style directly.</li>
      <li><code>strong</code> and <code>em</code> should be redefined using those font style definitions.</li>
      <li>Use ems and rems consistently, and use intelligent fractions for line heights, so that other components can be styled relative to the text.</li>
    </ul>
  </section>
  <section class="chapter-section" data-name="css-syntax">
    <h2 class="chapter-section--title">Syntax</h2>
    <ul>
      <li>Two spaces per level, one space after the colon.</li>
      <li>One selector, and one property, per line.</li>
      <li>Select components, not elements, as much as possible.</li>
      <li>Use shorthand properties only when you want to overwrite everything. Otherwise, use the most specific property (<code>background-color</code> not <code>background</code>; <code>margin-left</code> not <code>margin</code>).</li>
      <li>Avoid magic values as much as possible. Sizes, positions, colours should be defined in _base (or calculated from values in _base). You can also define special base values for each component, if necessary. You can use background image URLs directly, but use sprites or fonts where possible.</li>
    </ul>
<div class="code-block">
<pre class="code code-scss columns-two section-good">
.code-css{
  background-color: $dark-grey;
  color: $white;
}
</pre>
<pre class="code code-scss columns-two section-bad">
.code-css{ background: $dark-grey; color:    $white;}
</pre>
</div>
  </section>
  <section class="chapter-section" data-name="css-order">
    <h2 class="chapter-section--title">Property ordering</h2>
    <ol>
      <li>Display</li>
      <li>Positioning</li>
      <li>Box model</li>
      <li>Colours and typography</li>
      <li>Other</li>
    </ul>
  </section>
  <section class="chapter-section" data-name="css-otherRules">
    <h2 class="chapter-section--title">Other rules</h2>
    <ul>
      <li>Nothing is <code>!important</code>. Use a more specific selector when necessary to override.</li>
      <li>Avoid cascading selectors as much as possible. <code class="code-highlight">.pie-crust</code> rather than <code class="code-problem">.pie > .crust</code>.</li>
      <li>@include a z-index level from the _zindex partial instead of defining it directly</li>
    </ul>
  </section>
</article>