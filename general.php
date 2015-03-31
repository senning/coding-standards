<article class="chapter" data-name="all-code">
  <h1 class="chapter-title">Code</h1>
  <section class="chapter-section">
    <h2 class="chapter-section--title">White space</h2>
    <ul>
      <li>Indentation should be two spaces per level.</li>
      <li>One space after a colon.</li>
      <li>When passing more than two parameters to a function, put each on a new line. Commas go at the end of a line. One line per CSS property.</li>
      <li>A closing brace should be at the same level as its opening brace. A closing parenthesis should be one level above the function of its opening pair.</li>
      <li>No spaces after an opening parenthesis or before a closing one.</li>
      <li>In a parameter list on one line, one space after each comma</li>
    </ul>
<div class="code-block">
<pre class="code code-php columns-two section-good">
function high_five( $subject )
{  
  raise_arm();
  while(get_forearm_angle() &lt; 90)
  {
    increase_forearm_angle(5, 'degrees');
  }
  smack_hand(
    $subject->hand
    'medium-force',
    'no-regrets'
    );
}  
</pre>
<pre class="code code-php columns-two section-bad">
function high_five( $subject )
{  
  raise_arm();
    while(get_forearm_angle() &lt; 90)
    {
      increase_forearm_angle(5, 'degrees');
      }
  smack_hand( $subject->hand, 'medium-force', 'no-regrets' );
}  
</pre>
</div>

  </section>
  
</article>