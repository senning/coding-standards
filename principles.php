<article class="chapter" data-name="principles">
  <h1 class="chapter-title">Principles</h1>
  <section class="chapter-section" data-name="principle-clarity">
    <h2 class="chapter-section--title">Code should mean what it says</h2>
    <p>Your code is trying to do something and it should read that way</p>
    <ul>
      <li>Be as concise as you can be, as verbose as you need to be.</li>
      <li>Your function names should be verbs. They act on their parameters.</li>
      <li>When writing function, consider taking a single array or object as a parameter instead of a series of variables, as it makes it easier to expand your function and hook in to it. Balance this with the need for clarity and simplicity.</li>
    </ul>

<pre class="code code-php columns-two section-good">
function make_doughnuts($opts)
{  
  $doughnuts = array();
  $mix = combine($opts['ingredients']);
  $batter = do_beater($mix);
  for($i = 0; $i &lt; $opts['count']; $i++)
    {
    $doughnut = deep_fry($batter);
    $doughnuts[] = $doughnut;
    }  
  return $doughnuts;
}  
</pre>
<pre class="code code-php columns-two section-ok">
function make_doughnuts($opts)
{
  $doughnuts = array();
  for($i = 0; $i &lt; $opts['count']; $i++)
    {
    $doughnuts[] = deep_fry(
      beat_and_mix($opts);
      );
    }
  return $doughnuts;
}  
</pre>

  </section>
  <section class="chapter-section" data-name="reusable">
    <h2 class="chapter-section--title">Code should be reused, and reusable</h2>
    <p>Your code should do one thing, but not in just one way or for just one case. </p>
    <ul>
      <li>As much as practical, write as though your code will some day become its own project -the foundation for a thousand projects, created by a hundred developers.</li>
      <li>If something exists which does what you need, use it instead of writing something new. Use the time you save to hang out with the team instead! If it can do what you need with small changes, consider making those changes and sending them back to the project maintainer.</li>
      <li>Comment early and often. Your documentation should state what your code (class, function, SCSS partial&hellip;) does, what it takes in, what it gives back. Use the <a href="http://www.phpdoc.org/docs/latest/guides/docblocks.html" target="_blank">DocBlock</a> format, and the <a href="https://packagecontrol.io/packages/DocBlockr">DocBlockr</a> Sublime Text plugin.</li>
      <li>When writing a display function, consider breaking it apart in to a function to generate the text and a function to show the results. This allows reusing the logic in other contexts. Likewise, when writing an AJAX handler, consider writing a wrapper which gets the inputs and formats the output and a second function to handle the logic.</li>
    </ul>
  </section>
  <section class="chapter-section" data-name="blackbox">
    <h2 class="chapter-section--title">Code should be a part of the whole</h2>
    <p>Everything is awesome when you're part of a team. Fit in, write like the greater whole. Good or bad, it's important to be consistent.</p>
    <ul>
      <li>If you're working on an existing project, try to follow its logic and write slightly better than it was written. For our own code, consistency eases maintenance; on others' code, it makes your changes more likely to be accepted upstream.</li>
      <li>If you're working on a new project, follow the agreed style and logic of the team. At Grassriots, you should always feel free to make suggestions for changes but as the code piles up expect it to be less likely to be accepted for the current project.</li>
      <li>A function should be less than one screen long (~40 lines). If it's longer than that, consider breaking it up.</li>
      <li>Generally, a class or template should be less than 1500 lines long. Unless everything in the object is really tightly related, consider breaking it up in to multiple classes/template parts.</li>
    </ul>
<pre class="code code-php columns-two section-good">
class Music
{
  function make_note()
  {<span class="highlight">&hellip;</span>
  function make_song()
  {<span class="highlight">&hellip;</span>
  <span class="highlight">&hellip;</span>
}
class RockNRoll extends Music{
  function make_riff()
  {<span class="highlight">&hellip;</span>
  function make_song()
  {<span class="highlight">&hellip;</span>
  <span class="highlight">&hellip;</span>
}
class HipHop extends Music{
  function make_beat()
  {<span class="highlight">&hellip;</span>
  function make_song()
  {<span class="highlight">&hellip;</span>
  <span class="highlight">&hellip;</span>
}
class Opera extends Music{
  function make_aria()
  {<span class="highlight">&hellip;</span>
  function make_song()
  {<span class="highlight">&hellip;</span>
  <span class="highlight">&hellip;</span>
}
</pre>
<pre class="code code-php columns-two section-bad">
class Music
{
  function make_note()
  {<span class="highlight">&hellip;</span>
  function make_song()
  {<span class="highlight">&hellip;</span>
  function make_rocknroll()
  {<span class="highlight">&hellip;</span>
  function make_hiphop()
  {<span class="highlight">&hellip;</span>
  function make_opera()
  {<span class="highlight">&hellip;</span>
</pre>    
  </section>
</article>