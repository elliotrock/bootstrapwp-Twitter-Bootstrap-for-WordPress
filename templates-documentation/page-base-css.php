<?php
/**
 * Template Name: Documentation - Base CSS Styles
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.7
 */
get_header();
wp_enqueue_script('prettify-js');
wp_enqueue_style('prettify-css');
wp_enqueue_style('docs-css');
?>
<?php while (have_posts()) : the_post(); ?>

  <header class="jumbotron subhead" id="overview">
    <div class="container">
      <h1>Base CSS</h1>

      <p class="lead">Fundamental HTML elements styled and enhanced with extensible classes.</p>
    </div>
  </header>

  <div class="container">
    <div class="row">
      <div class="span3 bs-docs-sidebar">
        <ul class="nav nav-list bs-docs-sidenav">
          <li><a href="#global"><i class="glyphicon-chevron-right"></i> Global styles</a></li>
          <li><a href="#gridSystem"><i class="glyphicon-chevron-right"></i> Grid system</a></li>
          <li><a href="#typography"><i class="glyphicon-chevron-right"></i> Typography</a></li>
          <li><a href="#code"><i class="glyphicon-chevron-right"></i> Code</a></li>
          <li><a href="#tables"><i class="glyphicon-chevron-right"></i> Tables</a></li>
          <li><a href="#forms"><i class="glyphicon-chevron-right"></i> Forms</a></li>
          <li><a href="#buttons"><i class="glyphicon-chevron-right"></i> Buttons</a></li>
          <li><a href="#images"><i class="glyphicon-chevron-right"></i> Images</a></li>
          <li><a href="#icons"><i class="glyphicon-chevron-right"></i> Icons by Glyphicons</a></li>
          <li><a href="#responsive"><i class="glyphicon-chevron-right"></i> Responsive design</a></li>
        </ul>
      </div>
      <div class="span9">
        <!-- Global Bootstrap settings
        ================================================== -->
        <section id="global">
          <div class="page-header">
            <h1>Global settings</h1>
          </div>

          <h3>Requires HTML5 doctype</h3>
          <p>Bootstrap makes use of certain HTML elements and CSS properties that require the use of the HTML5 doctype. Include it at the beginning of all your projects.</p>
          <pre class="prettyprint linenums">
            &lt;!DOCTYPE html&gt;
            &lt;html lang="en"&gt;
            ...
            &lt;/html&gt;
          </pre>

          <h3>Typography and links</h3>
          <p>Bootstrap sets basic global display, typography, and link styles. Specifically, we:</p>
          <ul>
            <li>Remove <code>margin</code> on the body</li>
            <li>Set <code>background-color: white;</code> on the <code>body</code></li>
            <li>Use the <code>@font-family-base</code>, <code>@font-size-base</code>, and <code>@line-height-base</code> attributes as our typographic base</li>
            <li>Set the global link color via <code>@link-color</code> and apply link underlines only on <code>:hover</code></li>
          </ul>
          <p>These styles can be found within <strong>scaffolding.less</strong>.</p>

          <h3>Reset via Normalize</h3>
          <p>With Bootstrap 2, the old reset block has been dropped in favor of <a href="http://necolas.github.com/normalize.css/" target="_blank">Normalize.css</a>, a project by <a href="http://twitter.com/necolas" target="_blank">Nicolas Gallagher</a> and <a href="http://twitter.com/jon_neal" target="_blank">Jonathan Neal</a> that also powers the <a href="http://html5boilerplate.com" target="_blank">HTML5 Boilerplate</a>. While we use much of Normalize within our <strong>reset.less</strong>, we have removed some elements specifically for Bootstrap.</p>

        </section>

        <!-- Grid system
        ================================================== -->
        <section id="gridSystem">
          <div class="page-header">
            <h1>Grid system</h1>
          </div>

          <h2>Live grid example</h2>
          <p>The default Bootstrap grid system utilizes <strong>12 columns</strong>, making for a 940px wide container without <a href="./scaffolding.html#responsive">responsive features</a> enabled. With the responsive CSS file added, the grid adapts to be 724px and 1170px wide depending on your viewport. Below 767px viewports, the columns become fluid and stack vertically.</p>
          <div class="bs-docs-grid">
            <div class="row show-grid">
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
              <div class="span1">1</div>
            </div>
            <div class="row show-grid">
              <div class="span4">4</div>
              <div class="span4">4</div>
              <div class="span4">4</div>
            </div>
            <div class="row show-grid">
              <div class="span6">6</div>
              <div class="span6">6</div>
            </div>
            <div class="row show-grid">
              <div class="span12">12</div>
            </div>
          </div>

          <h3>Basic grid HTML</h3>
          <p>For a simple two column layout, create a <code>.row</code> and add the appropriate number of <code>.span*</code> columns. As this is a 12-column grid, each <code>.span*</code> spans a number of those 12 columns, and should always add up to 12 for each row (or the number of columns in the parent).</p>
          <pre class="prettyprint linenums">
            &lt;div class="row"&gt;
            &lt;div class="span4"&gt;...&lt;/div&gt;
            &lt;div class="span8"&gt;...&lt;/div&gt;
            &lt;/div&gt;
          </pre>
          <p>Given this example, we have <code>.span4</code> and <code>.span8</code>, making for 12 total columns and a complete row.</p>

          <h2>Offsetting columns</h2>
          <p>Move columns to the right using <code>.offset*</code> classes. Each class increases the left margin of a column by a whole column. For example, <code>.offset4</code> moves <code>.span4</code> over four columns.</p>
          <div class="bs-docs-grid">
            <div class="row show-grid">
              <div class="span4">4</div>
              <div class="span4 offset4">4 offset 4</div>
            </div><!-- /row -->
            <div class="row show-grid">
              <div class="span3 offset3">3 offset 3</div>
              <div class="span3 offset3">3 offset 3</div>
            </div><!-- /row -->
            <div class="row show-grid">
              <div class="span6 offset6">6 offset 6</div>
            </div><!-- /row -->
          </div>
          <pre class="prettyprint linenums">
            &lt;div class="row"&gt;
            &lt;div class="span4"&gt;...&lt;/div&gt;
            &lt;div class="span4 offset4"&gt;...&lt;/div&gt;
            &lt;/div&gt;
          </pre>


          <h2>Nesting columns</h2>
          <p>To nest your content with the default grid, add a new <code>.row</code> and set of <code>.span*</code> columns within an existing <code>.span*</code> column. Nested rows should include a set of columns that add up to the number of columns of its parent.</p>
          <div class="row show-grid">
            <div class="span9">
              Level 1 column
              <div class="row show-grid">
                <div class="span6">
                  Level 2
                </div>
                <div class="span6">
                  Level 2
                </div>
              </div>
            </div>
          </div>
          <pre class="prettyprint linenums">
            &lt;div class="row"&gt;
            &lt;div class="span9"&gt;
            Level 1 column
            &lt;div class="row"&gt;
            &lt;div class="span6"&gt;Level 2&lt;/div&gt;
            &lt;div class="span3"&gt;Level 2&lt;/div&gt;
            &lt;/div&gt;
            &lt;/div&gt;
            &lt;/div&gt;
          </pre>
        </section>

        <!-- Typography
        ================================================== -->
        <section id="typography">
          <div class="page-header">
            <h1>Typography</h1>
          </div>

          <h2 id="headings">Headings</h2>
          <p>All HTML headings, <code>&lt;h1&gt;</code> through <code>&lt;h6&gt;</code> are available.</p>
          <div class="bs-docs-example">
            <h1>h1. Heading 1</h1>
            <h2>h2. Heading 2</h2>
            <h3>h3. Heading 3</h3>
            <h4>h4. Heading 4</h4>
            <h5>h5. Heading 5</h5>
            <h6>h6. Heading 6</h6>
          </div>

          <h2 id="body-copy">Body copy</h2>
          <p>Bootstrap's global default <code>font-size</code> is <strong>14px</strong>, with a <code>line-height</code> of <strong>20px</strong>. This is applied to the <code>&lt;body&gt;</code> and all paragraphs. In addition, <code>&lt;p&gt;</code> (paragraphs) receive a bottom margin of half their line-height (10px by default).</p>
          <div class="bs-docs-example">
            <p>Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam id dolor id nibh ultricies vehicula.</p>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec ullamcorper nulla non metus auctor fringilla. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla.</p>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna. Donec id elit non mi porta gravida at eget metus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
          </div>
          <pre class="prettyprint">&lt;p&gt;...&lt;/p&gt;</pre>

          <h3>Lead body copy</h3>
          <p>Make a paragraph stand out by adding <code>.lead</code>.</p>
          <div class="bs-docs-example">
            <p class="lead">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus.</p>
          </div>
          <pre class="prettyprint">&lt;p class="lead"&gt;...&lt;/p&gt;</pre>

          <h3>Built with Less</h3>
          <p>The typographic scale is based on two LESS variables in <strong>variables.less</strong>: <code>@font-size-base</code> and <code>@line-height-base</code>. The first is the base font-size used throughout and the second is the base line-height. We use those variables and some simple math to create the margins, paddings, and line-heights of all our type and more. Customize them and Bootstrap adapts.</p>

          <hr class="bs-docs-separator">


          <h2 id="emphasis">Emphasis</h2>
          <p>Make use of HTML's default emphasis tags with lightweight styles.</p>

          <h3><code>&lt;small&gt;</code></h3>
          <p>For de-emphasizing inline or blocks of text, <small>use the small tag.</small></p>
          <div class="bs-docs-example">
            <p><small>This line of text is meant to be treated as fine print.</small></p>
          </div>
          <pre class="prettyprint">
            &lt;p&gt;
            &lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;
            &lt;/p&gt;
          </pre>

          <h3>Bold</h3>
          <p>For emphasizing a snippet of text with a heavier font-weight.</p>
          <div class="bs-docs-example">
            <p>The following snippet of text is <strong>rendered as bold text</strong>.</p>
          </div>
          <pre class="prettyprint">&lt;strong&gt;rendered as bold text&lt;/strong&gt;</pre>

          <h3>Italics</h3>
          <p>For emphasizing a snippet of text with italics.</p>
          <div class="bs-docs-example">
            <p>The following snippet of text is <em>rendered as italicized text</em>.</p>
          </div>
          <pre class="prettyprint">&lt;em&gt;rendered as italicized text&lt;/em&gt;</pre>

          <p><span class="label label-info">Heads up!</span> Feel free to use <code>&lt;b&gt;</code> and <code>&lt;i&gt;</code> in HTML5. <code>&lt;b&gt;</code> is meant to highlight words or phrases without conveying additional importance while <code>&lt;i&gt;</code> is mostly for voice, technical terms, etc.</p>

          <h3>Emphasis classes</h3>
          <p>Convey meaning through color with a handful of emphasis utility classes.</p>
          <div class="bs-docs-example">
            <p class="muted">Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.</p>
            <p class="text-warning">Etiam porta sem malesuada magna mollis euismod.</p>
            <p class="text-error">Donec ullamcorper nulla non metus auctor fringilla.</p>
            <p class="text-info">Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.</p>
            <p class="text-success">Duis mollis, est non commodo luctus, nisi erat porttitor ligula.</p>
          </div>
          <pre class="prettyprint linenums">
            &lt;p class="muted"&gt;Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.&lt;/p&gt;
            &lt;p class="text-warning"&gt;Etiam porta sem malesuada magna mollis euismod.&lt;/p&gt;
            &lt;p class="text-error"&gt;Donec ullamcorper nulla non metus auctor fringilla.&lt;/p&gt;
            &lt;p class="text-info"&gt;Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis.&lt;/p&gt;
            &lt;p class="text-success"&gt;Duis mollis, est non commodo luctus, nisi erat porttitor ligula.&lt;/p&gt;
          </pre>

          <hr class="bs-docs-separator">

          <h2 id="abbreviations">Abbreviations</h2>
          <p>Stylized implementation of HTML's <code>&lt;abbr&gt;</code> element for abbreviations and acronyms to show the expanded version on hover. Abbreviations with a <code>title</code> attribute have a light dotted bottom border and a help cursor on hover, providing additional context on hover.</p>

          <h3><code>&lt;abbr&gt;</code></h3>
          <p>For expanded text on long hover of an abbreviation, include the <code>title</code> attribute.</p>
          <div class="bs-docs-example">
            <p>An abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p>
          </div>
          <pre class="prettyprint">&lt;abbr title="attribute"&gt;attr&lt;/abbr&gt;</pre>

          <h3><code>&lt;abbr class="initialism"&gt;</code></h3>
          <p>Add <code>.initialism</code> to an abbreviation for a slightly smaller font-size.</p>
          <div class="bs-docs-example">
            <p><abbr title="HyperText Markup Language" class="initialism">HTML</abbr> is the best thing since sliced bread.</p>
          </div>
          <pre class="prettyprint">&lt;abbr title="HyperText Markup Language" class="initialism"&gt;HTML&lt;/abbr&gt;</pre>

          <hr class="bs-docs-separator">

          <h2 id="addresses">Addresses</h2>
          <p>Present contact information for the nearest ancestor or the entire body of work.</p>

          <h3><code>&lt;address&gt;</code></h3>
          <p>Preserve formatting by ending all lines with <code>&lt;br&gt;</code>.</p>
          <div class="bs-docs-example">
            <address>
              <strong>Twitter, Inc.</strong><br>
              795 Folsom Ave, Suite 600<br>
              San Francisco, CA 94107<br>
              <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>
            <address>
              <strong>Full Name</strong><br>
              <a href="mailto:#">first.last@example.com</a>
            </address>
          </div>
          <pre class="prettyprint linenums">
            &lt;address&gt;
            &lt;strong&gt;Twitter, Inc.&lt;/strong&gt;&lt;br&gt;
            795 Folsom Ave, Suite 600&lt;br&gt;
            San Francisco, CA 94107&lt;br&gt;
            &lt;abbr title="Phone"&gt;P:&lt;/abbr&gt; (123) 456-7890
            &lt;/address&gt;

            &lt;address&gt;
            &lt;strong&gt;Full Name&lt;/strong&gt;&lt;br&gt;
            &lt;a href="mailto:#"&gt;first.last@example.com&lt;/a&gt;
            &lt;/address&gt;
          </pre>

          <hr class="bs-docs-separator">


          <h2 id="blockquotes">Blockquotes</h2>
          <p>For quoting blocks of content from another source within your document.</p>

          <h3>Default blockquote</h3>
          <p>Wrap <code>&lt;blockquote&gt;</code> around any <abbr title="HyperText Markup Language">HTML</abbr> as the quote. For straight quotes we recommend a <code>&lt;p&gt;</code>.</p>
          <div class="bs-docs-example">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
            </blockquote>
          </div>
          <pre class="prettyprint linenums">
            &lt;blockquote&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
            &lt;/blockquote&gt;
          </pre>

          <h3>Blockquote options</h3>
          <p>Style and content changes for simple variations on a standard blockquote.</p>

          <h4>Naming a source</h4>
          <p>Add <code>&lt;small&gt;</code> tag for identifying the source. Wrap the name of the source work in <code>&lt;cite&gt;</code>.</p>
          <div class="bs-docs-example">
            <blockquote>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
            </blockquote>
          </div>
          <pre class="prettyprint linenums">
            &lt;blockquote&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.&lt;/p&gt;
            &lt;small&gt;Someone famous &lt;cite title="Source Title"&gt;Source Title&lt;/cite&gt;&lt;/small&gt;
            &lt;/blockquote&gt;
          </pre>

          <h4>Alternate displays</h4>
          <p>Use <code>.pull-right</code> for a floated, right-aligned blockquote.</p>
          <div class="bs-docs-example" style="overflow: hidden;">
            <blockquote class="pull-right">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
              <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
            </blockquote>
          </div>
          <pre class="prettyprint linenums">
            &lt;blockquote class="pull-right"&gt;
            ...
            &lt;/blockquote&gt;
          </pre>

          <hr class="bs-docs-separator">

          <!-- Lists -->
          <h2 id="lists">Lists</h2>

          <h3>Unordered</h3>
          <p>A list of items in which the order does <em>not</em> explicitly matter.</p>
          <div class="bs-docs-example">
            <ul>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit
                <ul>
                  <li>Phasellus iaculis neque</li>
                  <li>Purus sodales ultricies</li>
                  <li>Vestibulum laoreet porttitor sem</li>
                  <li>Ac tristique libero volutpat at</li>
                </ul>
              </li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ul>
          </div>
          <pre class="prettyprint linenums">
            &lt;ul&gt;
            &lt;li&gt;...&lt;/li&gt;
            &lt;/ul&gt;
          </pre>

          <h3>Ordered</h3>
          <p>A list of items in which the order <em>does</em> explicitly matter.</p>
          <div class="bs-docs-example">
            <ol>
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit</li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ol>
          </div>
          <pre class="prettyprint linenums">
            &lt;ol&gt;
            &lt;li&gt;...&lt;/li&gt;
            &lt;/ol&gt;
          </pre>

          <h3>Unstyled</h3>
          <p>Remove the default <code>list-style</code> and left padding on list items (immediate children only).</p>
          <div class="bs-docs-example">
            <ul class="list-unstyled">
              <li>Lorem ipsum dolor sit amet</li>
              <li>Consectetur adipiscing elit</li>
              <li>Integer molestie lorem at massa</li>
              <li>Facilisis in pretium nisl aliquet</li>
              <li>Nulla volutpat aliquam velit
                <ul>
                  <li>Phasellus iaculis neque</li>
                  <li>Purus sodales ultricies</li>
                  <li>Vestibulum laoreet porttitor sem</li>
                  <li>Ac tristique libero volutpat at</li>
                </ul>
              </li>
              <li>Faucibus porta lacus fringilla vel</li>
              <li>Aenean sit amet erat nunc</li>
              <li>Eget porttitor lorem</li>
            </ul>
          </div>
          <pre class="prettyprint linenums">
            &lt;ul class="list-unstyled"&gt;
            &lt;li&gt;...&lt;/li&gt;
            &lt;/ul&gt;
          </pre>

          <h3>Inline</h3>
          <p>Place all list items on a single line with <code>inline-block</code> and some light padding.</p>
          <div class="bs-docs-example">
            <ul class="list-inline">
              <li>Lorem ipsum</li>
              <li>Phasellus iaculis</li>
              <li>Nulla volutpat</li>
            </ul>
          </div>
          <pre class="prettyprint linenums">
            &lt;ul class="list-inline"&gt;
            &lt;li&gt;...&lt;/li&gt;
            &lt;/ul&gt;
          </pre>

          <h3>Description</h3>
          <p>A list of terms with their associated descriptions.</p>
          <div class="bs-docs-example">
            <dl>
              <dt>Description lists</dt>
              <dd>A description list is perfect for defining terms.</dd>
              <dt>Euismod</dt>
              <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
              <dd>Donec id elit non mi porta gravida at eget metus.</dd>
              <dt>Malesuada porta</dt>
              <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
            </dl>
          </div>
          <pre class="prettyprint linenums">
            &lt;dl&gt;
            &lt;dt&gt;...&lt;/dt&gt;
            &lt;dd&gt;...&lt;/dd&gt;
            &lt;/dl&gt;
          </pre>

          <h4>Horizontal description</h4>
          <p>Make terms and descriptions in <code>&lt;dl&gt;</code> line up side-by-side.</p>
          <div class="bs-docs-example">
            <dl class="dl-horizontal">
              <dt>Description lists</dt>
              <dd>A description list is perfect for defining terms.</dd>
              <dt>Euismod</dt>
              <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
              <dd>Donec id elit non mi porta gravida at eget metus.</dd>
              <dt>Malesuada porta</dt>
              <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
              <dt>Felis euismod semper eget lacinia</dt>
              <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
            </dl>
          </div>
          <pre class="prettyprint linenums">
            &lt;dl class="dl-horizontal"&gt;
            &lt;dt&gt;...&lt;/dt&gt;
            &lt;dd&gt;...&lt;/dd&gt;
            &lt;/dl&gt;
          </pre>
          <p>
            <span class="label label-info">Heads up!</span>
            Horizontal description lists will truncate terms that are too long to fit in the left column fix <code>text-overflow</code>. In narrower viewports, they will change to the default stacked layout.
          </p>
        </section>

        <!-- Code
        ================================================== -->
        <section id="code">
          <div class="page-header">
            <h1>Code</h1>
          </div>

          <h2>Inline</h2>
          <p>Wrap inline snippets of code with <code>&lt;code&gt;</code>.</p>
          <div class="bs-docs-example">
            For example, <code>&lt;section&gt;</code> should be wrapped as inline.
          </div>
          <pre class="prettyprint linenums">
            For example, &lt;code&gt;&lt;section&gt;&lt;/code&gt; should be wrapped as inline.
          </pre>

          <h2>Basic block</h2>
          <p>Use <code>&lt;pre&gt;</code> for multiple lines of code. Be sure to escape any angle brackets in the code for proper rendering.</p>
          <div class="bs-docs-example">
            <pre>&lt;p&gt;Sample text here...&lt;/p&gt;</pre>
          </div>
          <pre class="prettyprint linenums" style="margin-bottom: 9px;">
            &lt;pre&gt;
            &amp;lt;p&amp;gt;Sample text here...&amp;lt;/p&amp;gt;
            &lt;/pre&gt;
          </pre>
          <p><span class="label label-info">Heads up!</span> Be sure to keep code within <code>&lt;pre&gt;</code> tags as close to the left as possible; it will render all tabs.</p>
          <p>You may optionally add the <code>.pre-scrollable</code> class which will set a max-height of 350px and provide a y-axis scrollbar.</p>
        </section>

        <!-- Tables
        ================================================== -->
        <section id="tables">
          <div class="page-header">
            <h1>Tables</h1>
          </div>

          <h2>Default styles</h2>
          <p>For basic styling&mdash;light padding and only horizontal dividers&mdash;add the base class <code>.table</code> to any <code>&lt;table&gt;</code>.</p>
          <div class="bs-docs-example">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
          <pre class="prettyprint linenums">
            &lt;table class="table"&gt;
            …
            &lt;/table&gt;
          </pre>

          <hr class="bs-docs-separator">

          <h2>Optional classes</h2>
          <p>Add any of the following classes to the <code>.table</code> base class.</p>

          <h3><code>.table-striped</code></h3>
          <p>Adds zebra-striping to any table row within the <code>&lt;tbody&gt;</code> via the <code>:nth-child</code> CSS selector (not available in IE8).</p>
          <div class="bs-docs-example">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
          <pre class="prettyprint linenums" style="margin-bottom: 18px;">
            &lt;table class="table table-striped"&gt;
            …
            &lt;/table&gt;
          </pre>

          <h3><code>.table-bordered</code></h3>
          <p>Add borders and rounded corners to the table.</p>
          <div class="bs-docs-example">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td rowspan="2">1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@TwBootstrap</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
          <pre class="prettyprint linenums">
            &lt;table class="table table-bordered"&gt;
            …
            &lt;/table&gt;
          </pre>

          <h3><code>.table-hover</code></h3>
          <p>Enable a hover state on table rows within a <code>&lt;tbody&gt;</code>.</p>
          <div class="bs-docs-example">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
          <pre class="prettyprint linenums" style="margin-bottom: 18px;">
            &lt;table class="table table-hover"&gt;
            …
            &lt;/table&gt;
          </pre>

          <h3><code>.table-condensed</code></h3>
          <p>Makes tables more compact by cutting cell padding in half.</p>
          <div class="bs-docs-example">
            <table class="table table-condensed">
              <thead>
                <tr>
                  <th>#</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
          <pre class="prettyprint linenums" style="margin-bottom: 18px;">
            &lt;table class="table table-condensed"&gt;
            …
            &lt;/table&gt;
          </pre>


          <hr class="bs-docs-separator">


          <h2>Optional row classes</h2>
          <p>Use contextual classes to color table rows.</p>
          <table class="table table-bordered table-striped">
            <colgroup>
            <col class="span1">
            <col class="span7">
          </colgroup>
          <thead>
            <tr>
              <th>Class</th>
              <th>Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <code>.success</code>
              </td>
              <td>Indicates a successful or positive action.</td>
            </tr>
            <tr>
              <td>
                <code>.error</code>
              </td>
              <td>Indicates a dangerous or potentially negative action.</td>
            </tr>
            <tr>
              <td>
                <code>.warning</code>
              </td>
              <td>Indicates a warning that might need attention.</td>
            </tr>
            <tr>
              <td>
                <code>.info</code>
              </td>
              <td>Used as an alternative to the default styles.</td>
            </tr>
          </tbody>
        </table>
        <div class="bs-docs-example">
          <table class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Product</th>
                <th>Payment Taken</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr class="success">
                <td>1</td>
                <td>TB - Monthly</td>
                <td>01/04/2012</td>
                <td>Approved</td>
              </tr>
              <tr class="error">
                <td>2</td>
                <td>TB - Monthly</td>
                <td>02/04/2012</td>
                <td>Declined</td>
              </tr>
              <tr class="warning">
                <td>3</td>
                <td>TB - Monthly</td>
                <td>03/04/2012</td>
                <td>Pending</td>
              </tr>
              <tr class="info">
                <td>4</td>
                <td>TB - Monthly</td>
                <td>04/04/2012</td>
                <td>Call in to confirm</td>
              </tr>
            </tbody>
          </table>
        </div>
        <pre class="prettyprint linenums">
          ...
          &lt;tr class="success"&gt;
          &lt;td&gt;1&lt;/td&gt;
          &lt;td&gt;TB - Monthly&lt;/td&gt;
          &lt;td&gt;01/04/2012&lt;/td&gt;
          &lt;td&gt;Approved&lt;/td&gt;
          &lt;/tr&gt;
          ...
        </pre>

        <hr class="bs-docs-separator">

        <h2>Supported table markup</h2>
        <p>List of supported table HTML elements and how they should be used.</p>
        <table class="table table-bordered table-striped">
          <colgroup>
          <col class="span1">
          <col class="span7">
        </colgroup>
        <thead>
          <tr>
            <th>Tag</th>
            <th>Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <code>&lt;table&gt;</code>
            </td>
            <td>
              Wrapping element for displaying data in a tabular format
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;thead&gt;</code>
            </td>
            <td>
              Container element for table header rows (<code>&lt;tr&gt;</code>) to label table columns
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;tbody&gt;</code>
            </td>
            <td>
              Container element for table rows (<code>&lt;tr&gt;</code>) in the body of the table
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;tr&gt;</code>
            </td>
            <td>
              Container element for a set of table cells (<code>&lt;td&gt;</code> or <code>&lt;th&gt;</code>) that appears on a single row
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;td&gt;</code>
            </td>
            <td>
              Default table cell
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;th&gt;</code>
            </td>
            <td>
              Special table cell for column (or row, depending on scope and placement) labels<br>
              Must be used within a <code>&lt;thead&gt;</code>
            </td>
          </tr>
          <tr>
            <td>
              <code>&lt;caption&gt;</code>
            </td>
            <td>
              Description or summary of what the table holds, especially useful for screen readers
            </td>
          </tr>
        </tbody>
      </table>
      <pre class="prettyprint linenums">
        &lt;table&gt;
        &lt;caption&gt;...&lt;/caption&gt;
        &lt;thead&gt;
        &lt;tr&gt;
        &lt;th&gt;...&lt;/th&gt;
        &lt;th&gt;...&lt;/th&gt;
        &lt;/tr&gt;
        &lt;/thead&gt;
        &lt;tbody&gt;
        &lt;tr&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;td&gt;...&lt;/td&gt;
        &lt;/tr&gt;
        &lt;/tbody&gt;
        &lt;/table&gt;
      </pre>

    </section>

        <!-- Forms
        ================================================== -->
        <section id="forms">
          <div class="page-header">
            <h1>Forms</h1>
          </div>

          <h2 id="forms-default">Default styles</h2>
          <p>Individual form controls automatically receive some global styling. By default, inputs are set to <code>width: 100%;</code>.</p>
          <form class="bs-docs-example">
            <fieldset>
              <legend>Legend</legend>
              <label>Label name</label>
              <input type="text" placeholder="Type something…">
              <p class="help-block">Example block-level help text here.</p>
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Check me out
                </label>
              </div>
              <button type="submit" class="btn">Submit</button>
            </fieldset>
          </form>
          <pre class="prettyprint linenums">
            &lt;form&gt;
            &lt;fieldset&gt;
            &lt;legend&gt;Legend&lt;/legend&gt;
            &lt;label&gt;Label name&lt;/label&gt;
            &lt;input type="text" placeholder="Type something…"&gt;
            &lt;span class="help-block"&gt;Example block-level help text here.&lt;/span&gt;
            &lt;div class="checkbox"&gt;
            &lt;label&gt;
            &lt;input type="checkbox"&gt; Check me out
            &lt;/label&gt;
            &lt;/div&gt;
            &lt;button type="submit" class="btn"&gt;Submit&lt;/button&gt;
            &lt;/fieldset&gt;
            &lt;/form&gt;
          </pre>


          <hr class="bs-docs-separator">


          <h2 id="forms-layouts">Optional layouts</h2>
          <p>Included with Bootstrap are three optional form layouts for common use cases.</p>

          <h3>Search form</h3>
          <p>Add <code>.form-search</code> to the form and <code>.search-query</code> to the <code>&lt;input&gt;</code> for an extra-rounded text input.</p>
          <form class="bs-docs-example form-search">
            <input type="text" class="span3 search-query">
            <button type="submit" class="btn">Search</button>
          </form>
          <pre class="prettyprint linenums">
            &lt;form class="form-search"&gt;
            &lt;input type="text" class="span3 search-query"&gt;
            &lt;button type="submit" class="btn"&gt;Search&lt;/button&gt;
            &lt;/form&gt;
          </pre>

          <h3>Inline form</h3>
          <p>Add <code>.form-inline</code> for left-aligned labels and inline-block controls for a compact layout.</p>
          <form class="bs-docs-example form-inline">
            <input type="text" class="span3" placeholder="Email">
            <input type="password" class="span3" placeholder="Password">
            <div class="checkbox">
              <label>
                <input type="checkbox"> Remember me
              </label>
            </div>
            <button type="submit" class="btn">Sign in</button>
          </form>
          <pre class="prettyprint linenums">
            &lt;form class="form-inline"&gt;
            &lt;input type="text" class="span3" placeholder="Email"&gt;
            &lt;input type="password" class="span3" placeholder="Password"&gt;
            &lt;div class="checkbox"&gt;
            &lt;label&gt;
            &lt;input type="checkbox"&gt; Remember me
            &lt;/label&gt;
            &lt;/div&gt;
            &lt;button type="submit" class="btn"&gt;Sign in&lt;/button&gt;
            &lt;/form&gt;
          </pre>

          <h3>Horizontal form</h3>
          <p>Right align labels and float them to the left to make them appear on the same line as controls. Requires the most markup changes from a default form:</p>
          <ul>
            <li>Add <code>.form-horizontal</code> to the form</li>
            <li>Wrap labels and controls in <code>.control-group</code></li>
            <li>Add <code>.control-label</code> to the label</li>
            <li>Wrap any associated controls in <code>.controls</code> for proper alignment</li>
          </ul>
          <form class="bs-docs-example form-horizontal">
            <div class="control-group">
              <label class="control-label" for="inputEmail">Email</label>
              <div class="controls">
                <input type="text" id="inputEmail" placeholder="Email">
              </div>
            </div>
            <div class="control-group">
              <label class="control-label" for="inputPassword">Password</label>
              <div class="controls">
                <input type="password" id="inputPassword" placeholder="Password">
              </div>
            </div>
            <div class="control-group">
              <div class="controls">
                <label class="checkbox">
                  <input type="checkbox"> Remember me
                </label>
                <button type="submit" class="btn">Sign in</button>
              </div>
            </div>
          </form>
          <pre class="prettyprint linenums">
            &lt;form class="form-horizontal"&gt;
            &lt;div class="control-group"&gt;
            &lt;label class="control-label" for="inputEmail"&gt;Email&lt;/label&gt;
            &lt;div class="controls"&gt;
            &lt;input type="text" id="inputEmail" placeholder="Email"&gt;
            &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="control-group"&gt;
            &lt;label class="control-label" for="inputPassword"&gt;Password&lt;/label&gt;
            &lt;div class="controls"&gt;
            &lt;input type="password" id="inputPassword" placeholder="Password"&gt;
            &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="control-group"&gt;
            &lt;div class="controls"&gt;
            &lt;label class="checkbox"&gt;
            &lt;input type="checkbox"&gt; Remember me
            &lt;/label&gt;
            &lt;button type="submit" class="btn"&gt;Sign in&lt;/button&gt;
            &lt;/div&gt;
            &lt;/div&gt;
            &lt;/form&gt;
          </pre>


          <hr class="bs-docs-separator">


          <h2 id="forms-controls">Supported form controls</h2>
          <p>Examples of standard form controls supported in an example form layout.</p>

          <h3>Inputs</h3>
          <p>Most common form control, text-based input fields. Includes support for all HTML5 types: text, password, datetime, datetime-local, date, month, time, week, number, email, url, search, tel, and color.</p>
          <p>Requires the use of a specified <code>type</code> at all times.</p>
          <form class="bs-docs-example form-inline">
            <input type="text" placeholder="Text input">
          </form>
          <pre class="prettyprint linenums">
            &lt;input type="text" placeholder="Text input"&gt;
          </pre>

          <h3>Textarea</h3>
          <p>Form control which supports multiple lines of text. Change <code>rows</code> attribute as necessary.</p>
          <form class="bs-docs-example form-inline">
            <textarea rows="3"></textarea>
          </form>
          <pre class="prettyprint linenums">
            &lt;textarea rows="3"&gt;&lt;/textarea&gt;
          </pre>

          <h3>Checkboxes and radios</h3>
          <p>Checkboxes are for selecting one or several options in a list while radios are for selecting one option from many.</p>
          <h4>Default (stacked)</h4>
          <form class="bs-docs-example">
            <label class="checkbox">
              <input type="checkbox" value="">
              Option one is this and that&mdash;be sure to include why it's great
            </label>
            <br>
            <label class="radio">
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
              Option one is this and that&mdash;be sure to include why it's great
            </label>
            <label class="radio">
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              Option two can be something else and selecting it will deselect option one
            </label>
          </form>
          <pre class="prettyprint linenums">
            &lt;label class="checkbox"&gt;
            &lt;input type="checkbox" value=""&gt;
            Option one is this and that&mdash;be sure to include why it's great
            &lt;/label&gt;

            &lt;label class="radio"&gt;
            &lt;input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked&gt;
            Option one is this and that&mdash;be sure to include why it's great
            &lt;/label&gt;
            &lt;label class="radio"&gt;
            &lt;input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"&gt;
            Option two can be something else and selecting it will deselect option one
            &lt;/label&gt;
          </pre>

          <h4>Inline checkboxes</h4>
          <p>Add the <code>.inline</code> class to a series of checkboxes or radios for controls appear on the same line.</p>
          <form class="bs-docs-example">
            <label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
            </label>
            <label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
            </label>
            <label class="checkbox inline">
              <input type="checkbox" id="inlineCheckbox3" value="option3"> 3
            </label>
          </form>
          <pre class="prettyprint linenums">
            &lt;label class="checkbox inline"&gt;
            &lt;input type="checkbox" id="inlineCheckbox1" value="option1"&gt; 1
            &lt;/label&gt;
            &lt;label class="checkbox inline"&gt;
            &lt;input type="checkbox" id="inlineCheckbox2" value="option2"&gt; 2
            &lt;/label&gt;
            &lt;label class="checkbox inline"&gt;
            &lt;input type="checkbox" id="inlineCheckbox3" value="option3"&gt; 3
            &lt;/label&gt;
          </pre>

          <h3>Selects</h3>
          <p>Use the default option or specify a <code>multiple="multiple"</code> to show multiple options at once.</p>
          <form class="bs-docs-example">
            <select>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
            <br>
            <select multiple="multiple">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </form>
          <pre class="prettyprint linenums">
            &lt;select&gt;
            &lt;option&gt;1&lt;/option&gt;
            &lt;option&gt;2&lt;/option&gt;
            &lt;option&gt;3&lt;/option&gt;
            &lt;option&gt;4&lt;/option&gt;
            &lt;option&gt;5&lt;/option&gt;
            &lt;/select&gt;

            &lt;select multiple="multiple"&gt;
            &lt;option&gt;1&lt;/option&gt;
            &lt;option&gt;2&lt;/option&gt;
            &lt;option&gt;3&lt;/option&gt;
            &lt;option&gt;4&lt;/option&gt;
            &lt;option&gt;5&lt;/option&gt;
            &lt;/select&gt;
          </pre>


          <hr class="bs-docs-separator">


          <h2 id="forms-extending">Extending form controls</h2>
          <p>Adding on top of existing browser controls, Bootstrap includes other useful form components.</p>

          <h3>Prepended and appended inputs</h3>
          <p>Add text or buttons before or after any text-based input. Do note that <code>select</code> elements are not supported here.</p>

          <h4>Default options</h4>
          <p>Wrap an <code>.add-on</code> and an <code>input</code> with one of two classes to prepend or append text to an input.</p>
          <form class="bs-docs-example">
            <div class="input-prepend">
              <span class="add-on">@</span>
              <input id="prependedInput" type="text" placeholder="Username">
            </div>
            <br>
            <div class="input-append">
              <input id="appendedInput" type="text">
              <span class="add-on">.00</span>
            </div>
          </form>
          <pre class="prettyprint linenums">
            &lt;div class="input-prepend"&gt;
            &lt;span class="add-on"&gt;@&lt;/span&gt;
            &lt;input id="prependedInput" type="text" placeholder="Username"&gt;
            &lt;/div&gt;
            &lt;div class="input-append"&gt;
            &lt;input id="appendedInput" type="text"&gt;
            &lt;span class="add-on"&gt;.00&lt;/span&gt;
            &lt;/div&gt;
          </pre>

          <h4>Combined</h4>
          <p>Use both classes and two instances of <code>.add-on</code> to prepend and append an input.</p>
          <form class="bs-docs-example form-inline">
            <div class="input-prepend input-append">
              <span class="add-on">$</span>
              <input id="appendedPrependedInput" type="text">
              <span class="add-on">.00</span>
            </div>
          </form>
          <pre class="prettyprint linenums">
            &lt;div class="input-prepend input-append"&gt;
            &lt;span class="add-on"&gt;$&lt;/span&gt;
            &lt;input id="appendedPrependedInput" type="text"&gt;
            &lt;span class="add-on"&gt;.00&lt;/span&gt;
            &lt;/div&gt;
          </pre>

          <h4>Buttons instead of text</h4>
          <p>Instead of a <code>&lt;span&gt;</code> with text, use a <code>.btn</code> to attach a button (or two) to an input.</p>
          <form class="bs-docs-example">
            <div class="input-append">
              <input class="span3" id="appendedInputButton" type="text">
              <button class="btn" type="button">Go!</button>
            </div>
          </form>
          <pre class="prettyprint linenums">
            &lt;div class="input-append"&gt;
            &lt;input class="span3" id="appendedInputButton" type="text"&gt;
            &lt;button class="btn" type="button"&gt;Go!&lt;/button&gt;
            &lt;/div&gt;
          </pre>
          <form class="bs-docs-example">
            <div class="input-append">
              <input class="span3" id="appendedInputButtons" type="text">
              <button class="btn" type="button">Search</button>
              <button class="btn" type="button">Options</button>
            </div>
          </form>
          <pre class="prettyprint linenums">
            &lt;div class="input-append"&gt;
            &lt;input class="span3" id="appendedInputButton" type="text"&gt;
            &lt;button class="btn" type="button"&gt;Search&lt;/button&gt;
            &lt;button class="btn" type="button"&gt;Options&lt;/button&gt;
            &lt;/div&gt;
          </pre>

          <h4>Button dropdowns</h4>
          <p></p>
          <form class="bs-docs-example">
            <div class="input-append">
              <input class="span3" id="appendedDropdownButton" type="text">
              <div class="btn-group">
                <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
            </div><!-- /input-append -->
          </form>
          <pre class="prettyprint linenums">
            &lt;div class="input-append"&gt;
            &lt;input id="appendedInputButtons" type="text"&gt;
            &lt;input class="span3" id="appendedDropdownButton" type="text"&gt;
            &lt;div class="btn-group"&gt;
            &lt;button class="btn dropdown-toggle" data-toggle="dropdown"&gt;
            Action
            &lt;span class="caret"&gt;&lt;/span&gt;
            &lt;/button&gt;
            &lt;ul class="dropdown-menu"&gt;
            ...
            &lt;/ul&gt;
            &lt;/div&gt;
            &lt;/div&gt;
          </pre>

          <form class="bs-docs-example">
            <div class="input-prepend">
              <div class="btn-group">
                <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <input class="span2" id="prependedDropdownButton" type="text">
            </div><!-- /input-prepend -->
          </form>
          <pre class="prettyprint linenums">
            &lt;div class="input-prepend"&gt;
            &lt;div class="btn-group"&gt;
            &lt;button class="btn dropdown-toggle" data-toggle="dropdown"&gt;
            Action
            &lt;span class="caret"&gt;&lt;/span&gt;
            &lt;/button&gt;
            &lt;ul class="dropdown-menu"&gt;
            ...
            &lt;/ul&gt;
            &lt;/div&gt;
            &lt;input class="span2" id="prependedDropdownButton" type="text"&gt;
            &lt;/div&gt;
          </pre>

          <form class="bs-docs-example">
            <div class="input-prepend input-append">
              <div class="btn-group">
                <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
              <input class="span2" id="appendedPrependedDropdownButton" type="text">
              <div class="btn-group">
                <button class="btn dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div><!-- /btn-group -->
            </div><!-- /input-prepend input-append -->
          </form>
          <pre class="prettyprint linenums">
            &lt;div class="input-prepend input-append"&gt;
            &lt;div class="btn-group"&gt;
            &lt;button class="btn dropdown-toggle" data-toggle="dropdown"&gt;
            Action
            &lt;span class="caret"&gt;&lt;/span&gt;
            &lt;/button&gt;
            &lt;ul class="dropdown-menu"&gt;
            ...
            &lt;/ul&gt;
            &lt;/div&gt;
            &lt;input class="span2" id="appendedPrependedDropdownButton" type="text"&gt;
            &lt;div class="btn-group"&gt;
            &lt;button class="btn dropdown-toggle" data-toggle="dropdown"&gt;
            Action
            &lt;span class="caret"&gt;&lt;/span&gt;
            &lt;/button&gt;
            &lt;ul class="dropdown-menu"&gt;
            ...
            &lt;/ul&gt;
            &lt;/div&gt;
            &lt;/div&gt;
          </pre>

          <h4>Segmented dropdown groups</h4>
          <form class="bs-docs-example">
            <div class="input-prepend">
              <div class="btn-group">
                <button class="btn" tabindex="-1">Action</button>
                <button class="btn dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
              <input type="text" class="span3">
            </div>
            <div class="input-append">
              <input type="text" class="span3">
              <div class="btn-group">
                <button class="btn" tabindex="-1">Action</button>
                <button class="btn dropdown-toggle" data-toggle="dropdown" tabindex="-1">
                  <span class="caret"></span>
                </button>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Separated link</a></li>
                </ul>
              </div>
            </div>
          </form>
          <pre class="prettyprint linenums">
            &lt;form&gt;
            &lt;div class="input-prepend"&gt;
            &lt;div class="btn-group"&gt;...&lt;/div&gt;
            &lt;input type="text" class="span3"&gt;
            &lt;/div&gt;
            &lt;div class="input-append"&gt;
            &lt;input type="text" class="span3"&gt;
            &lt;div class="btn-group"&gt;...&lt;/div&gt;
            &lt;/div&gt;
            &lt;/form&gt;
          </pre>

          <h4>Search form</h4>
          <form class="bs-docs-example form-search">
            <div class="input-append">
              <input type="text" class="search-query span3">
              <button type="submit" class="btn">Search</button>
            </div>
            <div class="input-prepend">
              <button type="submit" class="btn">Search</button>
              <input type="text" class="search-query span3">
            </div>
          </form>
          <pre class="prettyprint linenums">
            &lt;form class="form-search"&gt;
            &lt;div class="input-append"&gt;
            &lt;input type="text" class="search-query span3"&gt;
            &lt;button type="submit" class="btn"&gt;Search&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="input-prepend"&gt;
            &lt;button type="submit" class="btn"&gt;Search&lt;/button&gt;
            &lt;input type="text" class="search-query span3"&gt;
            &lt;/div&gt;
            &lt;/form&gt;
          </pre>

          <h3 id="forms-extending-sizes">Control sizing</h3>
          <p>Use relative sizing classes like <code>.input-large</code> or match your inputs to the grid column sizes using <code>.span*</code> classes.</p>

          <h4>Block level inputs</h4>
          <p>Make any <code>&lt;input&gt;</code> or <code>&lt;textarea&gt;</code> element behave like a block level element.</p>
          <form class="bs-docs-example" style="padding-bottom: 15px;">
            <div class="controls">
              <input class="input-block-level" type="text" placeholder=".input-block-level">
            </div>
          </form>
          <pre class="prettyprint linenums">
            &lt;input class="input-block-level" type="text" placeholder=".input-block-level"&gt;
          </pre>

          <h4>Relative sizing</h4>
          <p>Create larger or smaller form controls that match button sizes.</p>
          <form class="bs-docs-example" style="padding-bottom: 15px;">
            <div class="controls docs-input-sizes">
              <input class="input-large" type="text" placeholder=".input-large">
              <input class="input-small" type="text" placeholder=".input-small">
              <input class="input-mini" type="text" placeholder=".input-mini">
            </div>
          </form>
          <pre class="prettyprint linenums">
            &lt;input class="input-large" type="text" placeholder=".input-large"&gt;
            &lt;input class="input-small" type="text" placeholder=".input-small"&gt;
            &lt;input class="input-mini" type="text" placeholder=".input-mini"&gt;
          </pre>

          <h4>Column sizing</h4>
          <p>Use <code>.span1</code> to <code>.span12</code> for setting widths on inputs that match Bootstrap's grid system.</p>
          <form class="bs-docs-example" style="padding-bottom: 15px;">
            <div class="controls docs-input-sizes">
              <input class="span1" type="text" placeholder=".span1">
              <input class="span2" type="text" placeholder=".span2">
              <input class="span3" type="text" placeholder=".span3">
              <select class="span1">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <select class="span2">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
              <select class="span3">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </form>
          <pre class="prettyprint linenums">
            &lt;input class="span1" type="text" placeholder=".span1"&gt;
            &lt;input class="span2" type="text" placeholder=".span2"&gt;
            &lt;input class="span3" type="text" placeholder=".span3"&gt;
            &lt;select class="span1"&gt;
            ...
            &lt;/select&gt;
            &lt;select class="span2"&gt;
            ...
            &lt;/select&gt;
            &lt;select class="span3"&gt;
            ...
            &lt;/select&gt;
          </pre>

          <p>For multiple grid inputs per line, <strong>use the <code>.controls-row</code> modifier class for proper spacing</strong>. It floats the inputs to collapse white-space, sets the proper margins, and the clears the float.</p>
          <form class="bs-docs-example" style="padding-bottom: 15px;">
            <div class="controls controls-row">
              <input class="span5" type="text" placeholder=".span5">
            </div>
            <div class="controls controls-row">
              <input class="span4" type="text" placeholder=".span4">
              <input class="span1" type="text" placeholder=".span1">
            </div>
            <div class="controls controls-row">
              <input class="span3" type="text" placeholder=".span3">
              <input class="span2" type="text" placeholder=".span2">
            </div>
            <div class="controls controls-row">
              <input class="span2" type="text" placeholder=".span2">
              <input class="span3" type="text" placeholder=".span3">
            </div>
            <div class="controls controls-row">
              <input class="span1" type="text" placeholder=".span1">
              <input class="span4" type="text" placeholder=".span4">
            </div>
          </form>
          <pre class="prettyprint linenums">
            &lt;div class="controls"&gt;
            &lt;input class="span5" type="text" placeholder=".span5"&gt;
            &lt;/div&gt;
            &lt;div class="controls controls-row"&gt;
            &lt;input class="span4" type="text" placeholder=".span4"&gt;
            &lt;input class="span1" type="text" placeholder=".span1"&gt;
            &lt;/div&gt;
            ...
          </pre>

          <h3>Uneditable inputs</h3>
          <p>Present data in a form that's not editable without using actual form markup.</p>
          <form class="bs-docs-example">
            <span class="input-xlarge uneditable-input">Some value here</span>
          </form>
          <pre class="prettyprint linenums">
            &lt;span class="input-xlarge uneditable-input"&gt;Some value here&lt;/span&gt;
          </pre>

          <h3>Form actions</h3>
          <p>End a form with a group of actions (buttons). When placed within a <code>.form-horizontal</code>, the buttons will automatically indent to line up with the form controls.</p>
          <form class="bs-docs-example">
            <div class="form-actions">
              <button type="submit" class="btn btn-primary">Save changes</button>
              <button type="button" class="btn">Cancel</button>
            </div>
          </form>
          <pre class="prettyprint linenums">
            &lt;div class="form-actions"&gt;
            &lt;button type="submit" class="btn btn-primary"&gt;Save changes&lt;/button&gt;
            &lt;button type="button" class="btn"&gt;Cancel&lt;/button&gt;
            &lt;/div&gt;
          </pre>

          <h3>Help text</h3>
          <p>Inline and block level support for help text that appears around form controls.</p>
          <h4>Inline help</h4>
          <form class="bs-docs-example form-inline">
            <input type="text"> <span class="help-inline">Inline help text</span>
          </form>
          <pre class="prettyprint linenums">
            &lt;input type="text"&gt;&lt;span class="help-inline"&gt;Inline help text&lt;/span&gt;
          </pre>

          <h4>Block help</h4>
          <form class="bs-docs-example form-inline">
            <input type="text">
            <span class="help-block">A longer block of help text that breaks onto a new line and may extend beyond one line.</span>
          </form>
          <pre class="prettyprint linenums">
            &lt;input type="text"&gt;&lt;span class="help-block"&gt;A longer block of help text that breaks onto a new line and may extend beyond one line.&lt;/span&gt;
          </pre>


          <hr class="bs-docs-separator">


          <h2>Form control states</h2>
          <p>Provide feedback to users or visitors with basic feedback states on form controls and labels.</p>

          <h3>Input focus</h3>
          <p>We remove the default <code>outline</code> styles on some form controls and apply a <code>box-shadow</code> in its place for <code>:focus</code>.</p>
          <form class="bs-docs-example form-inline">
            <input class="input-xlarge focused" id="focusedInput" type="text" value="This is focused...">
          </form>
          <pre class="prettyprint linenums">
            &lt;input class="input-xlarge" id="focusedInput" type="text" value="This is focused..."&gt;
          </pre>

          <h3>Invalid inputs</h3>
          <p>Style inputs via default browser functionality with <code>:invalid</code>. Specify a <code>type</code> and add the <code>required</code> attribute.</p>
          <form class="bs-docs-example form-inline">
            <input class="span3" type="email" placeholder="test@example.com" required>
          </form>
          <pre class="prettyprint linenums">
            &lt;input class="span3" type="email" required&gt;
          </pre>

          <h3>Disabled inputs</h3>
          <p>Add the <code>disabled</code> attribute on an input to prevent user input and trigger a slightly different look.</p>
          <form class="bs-docs-example form-inline">
            <input class="input-xlarge" id="disabledInput" type="text" placeholder="Disabled input here…" disabled>
          </form>
          <pre class="prettyprint linenums">
            &lt;input class="input-xlarge" id="disabledInput" type="text" placeholder="Disabled input here..." disabled&gt;
          </pre>

          <h3>Validation states</h3>
          <p>Bootstrap includes validation styles for error, warning, info, and success messages. To use, add the appropriate class to the surrounding <code>.control-group</code>.</p>

          <form class="bs-docs-example form-horizontal">
            <div class="control-group warning">
              <label class="control-label" for="inputWarning">Input with warning</label>
              <div class="controls">
                <input type="text" id="inputWarning">
                <span class="help-inline">Something may have gone wrong</span>
              </div>
            </div>
            <div class="control-group error">
              <label class="control-label" for="inputError">Input with error</label>
              <div class="controls">
                <input type="text" id="inputError">
                <span class="help-inline">Please correct the error</span>
              </div>
            </div>
            <div class="control-group info">
              <label class="control-label" for="inputInfo">Input with info</label>
              <div class="controls">
                <input type="text" id="inputInfo">
                <span class="help-inline">Username is taken</span>
              </div>
            </div>
            <div class="control-group success">
              <label class="control-label" for="inputSuccess">Input with success</label>
              <div class="controls">
                <input type="text" id="inputSuccess">
                <span class="help-inline">Woohoo!</span>
              </div>
            </div>
          </form>
          <pre class="prettyprint linenums">
            &lt;div class="control-group warning"&gt;
            &lt;label class="control-label" for="inputWarning"&gt;Input with warning&lt;/label&gt;
            &lt;div class="controls"&gt;
            &lt;input type="text" id="inputWarning"&gt;
            &lt;span class="help-inline"&gt;Something may have gone wrong&lt;/span&gt;
            &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="control-group error"&gt;
            &lt;label class="control-label" for="inputError"&gt;Input with error&lt;/label&gt;
            &lt;div class="controls"&gt;
            &lt;input type="text" id="inputError"&gt;
            &lt;span class="help-inline"&gt;Please correct the error&lt;/span&gt;
            &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="control-group success"&gt;
            &lt;label class="control-label" for="inputSuccess"&gt;Input with success&lt;/label&gt;
            &lt;div class="controls"&gt;
            &lt;input type="text" id="inputSuccess"&gt;
            &lt;span class="help-inline"&gt;Woohoo!&lt;/span&gt;
            &lt;/div&gt;
            &lt;/div&gt;
          </pre>

        </section>



        <!-- Buttons
        ================================================== -->
        <section id="buttons">
          <div class="page-header">
            <h1>Buttons</h1>
          </div>

          <h2>Default buttons</h2>
          <p>Button styles can be applied to anything with the <code>.btn</code> class applied. However, typically you'll want to apply these to only <code>&lt;a&gt;</code> and <code>&lt;button&gt;</code> elements for the best rendering.</p>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Button</th>
                <th>class=""</th>
                <th>Description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><button type="button" class="btn">Default</button></td>
                <td><code>btn</code></td>
                <td>Standard gray button with gradient</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-primary">Primary</button></td>
                <td><code>btn btn-primary</code></td>
                <td>Provides extra visual weight and identifies the primary action in a set of buttons</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-info">Info</button></td>
                <td><code>btn btn-info</code></td>
                <td>Used as an alternative to the default styles</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-success">Success</button></td>
                <td><code>btn btn-success</code></td>
                <td>Indicates a successful or positive action</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-warning">Warning</button></td>
                <td><code>btn btn-warning</code></td>
                <td>Indicates caution should be taken with this action</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-danger">Danger</button></td>
                <td><code>btn btn-danger</code></td>
                <td>Indicates a dangerous or potentially negative action</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-inverse">Inverse</button></td>
                <td><code>btn btn-inverse</code></td>
                <td>Alternate dark gray button, not tied to a semantic action or use</td>
              </tr>
              <tr>
                <td><button type="button" class="btn btn-link">Link</button></td>
                <td><code>btn btn-link</code></td>
                <td>Deemphasize a button by making it look like a link while maintaining button behavior</td>
              </tr>
            </tbody>
          </table>

          <h4>Cross browser compatibility</h4>
          <p>IE9 doesn't crop background gradients on rounded corners, so we remove it. Related, IE9 jankifies disabled <code>button</code> elements, rendering text gray with a nasty text-shadow that we cannot fix.</p>


          <h2>Button sizes</h2>
          <p>Fancy larger or smaller buttons? Add <code>.btn-large</code>, <code>.btn-small</code>, or <code>.btn-mini</code> for additional sizes.</p>
          <div class="bs-docs-example">
            <p>
              <button type="button" class="btn btn-large btn-primary">Large button</button>
              <button type="button" class="btn btn-large">Large button</button>
            </p>
            <p>
              <button type="button" class="btn btn-primary">Default button</button>
              <button type="button" class="btn">Default button</button>
            </p>
            <p>
              <button type="button" class="btn btn-small btn-primary">Small button</button>
              <button type="button" class="btn btn-small">Small button</button>
            </p>
            <p>
              <button type="button" class="btn btn-mini btn-primary">Mini button</button>
              <button type="button" class="btn btn-mini">Mini button</button>
            </p>
          </div>
          <pre class="prettyprint linenums">
            &lt;p&gt;
            &lt;button class="btn btn-large btn-primary" type="button"&gt;Large button&lt;/button&gt;
            &lt;button class="btn btn-large" type="button"&gt;Large button&lt;/button&gt;
            &lt;/p&gt;
            &lt;p&gt;
            &lt;button class="btn btn-primary" type="button"&gt;Default button&lt;/button&gt;
            &lt;button class="btn" type="button"&gt;Default button&lt;/button&gt;
            &lt;/p&gt;
            &lt;p&gt;
            &lt;button class="btn btn-small btn-primary" type="button"&gt;Small button&lt;/button&gt;
            &lt;button class="btn btn-small" type="button"&gt;Small button&lt;/button&gt;
            &lt;/p&gt;
            &lt;p&gt;
            &lt;button class="btn btn-mini btn-primary" type="button"&gt;Mini button&lt;/button&gt;
            &lt;button class="btn btn-mini" type="button"&gt;Mini button&lt;/button&gt;
            &lt;/p&gt;
          </pre>
          <p>Create block level buttons&mdash;those that span the full width of a parent&mdash; by adding <code>.btn-block</code>.</p>
          <div class="bs-docs-example">
            <div class="well" style="max-width: 400px; margin: 0 auto 10px;">
              <button type="button" class="btn btn-large btn-block btn-primary">Block level button</button>
              <button type="button" class="btn btn-large btn-block">Block level button</button>
            </div>
          </div>
          <pre class="prettyprint linenums">
            &lt;button class="btn btn-large btn-block btn-primary" type="button"&gt;Block level button&lt;/button&gt;
            &lt;button class="btn btn-large btn-block" type="button"&gt;Block level button&lt;/button&gt;
          </pre>


          <h2>Disabled state</h2>
          <p>Make buttons look unclickable by fading them back 50%.</p>

          <h3>Anchor element</h3>
          <p>Add the <code>.disabled</code> class to <code>&lt;a&gt;</code> buttons.</p>
          <p class="bs-docs-example">
            <a href="#" class="btn btn-large btn-primary disabled">Primary link</a>
            <a href="#" class="btn btn-large disabled">Link</a>
          </p>
          <pre class="prettyprint linenums">
            &lt;a href="#" class="btn btn-large btn-primary disabled"&gt;Primary link&lt;/a&gt;
            &lt;a href="#" class="btn btn-large disabled"&gt;Link&lt;/a&gt;
          </pre>
          <p>
            <span class="label label-info">Heads up!</span>
            We use <code>.disabled</code> as a utility class here, similar to the common <code>.active</code> class, so no prefix is required. Also, this class is only for aesthetic; you must use custom JavaScript to disable links here.
          </p>

          <h3>Button element</h3>
          <p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>
          <p class="bs-docs-example">
            <button type="button" class="btn btn-large btn-primary disabled" disabled="disabled">Primary button</button>
            <button type="button" class="btn btn-large" disabled>Button</button>
          </p>
          <pre class="prettyprint linenums">
            &lt;button type="button" class="btn btn-large btn-primary disabled" disabled="disabled"&gt;Primary button&lt;/button&gt;
            &lt;button type="button" class="btn btn-large" disabled&gt;Button&lt;/button&gt;
          </pre>


          <h2>One class, multiple tags</h2>
          <p>Use the <code>.btn</code> class on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
          <form class="bs-docs-example">
            <a class="btn" href="">Link</a>
            <button class="btn" type="submit">Button</button>
            <input class="btn" type="button" value="Input">
            <input class="btn" type="submit" value="Submit">
          </form>
          <pre class="prettyprint linenums">
            &lt;a class="btn" href=""&gt;Link&lt;/a&gt;
            &lt;button class="btn" type="submit"&gt;Button&lt;/button&gt;
            &lt;input class="btn" type="button" value="Input"&gt;
            &lt;input class="btn" type="submit" value="Submit"&gt;
          </pre>
          <p>As a best practice, try to match the element for your context to ensure matching cross-browser rendering. If you have an <code>input</code>, use an <code>&lt;input type="submit"&gt;</code> for your button.</p>

        </section>



        <!-- Images
        ================================================== -->
        <section id="images">
          <div class="page-header">
            <h1>Images</h1>
          </div>

          <p>Add classes to an <code>&lt;img&gt;</code> element to easily style images in any project.</p>
          <div class="bs-docs-example bs-docs-example-images">
            <img data-src="holder.js/140x140" class="img-rounded">
            <img data-src="holder.js/140x140" class="img-circle">
            <img data-src="holder.js/140x140" class="img-polaroid">
          </div>
          <pre class="prettyprint linenums">
            &lt;img src="..." class="img-rounded"&gt;
            &lt;img src="..." class="img-circle"&gt;
            &lt;img src="..." class="img-polaroid"&gt;
          </pre>
          <p><span class="label label-info">Heads up!</span> <code>.img-rounded</code> and <code>.img-circle</code> do not work in IE8 due to lack of <code>border-radius</code> support.</p>


        </section>



        <!-- Icons
        ================================================== -->
        <section id="icons">
          <div class="page-header">
            <h1>Icons font <small>by <a href="http://glyphicons.com" target="_blank">Glyphicons</a></small></h1>
          </div>

          <h2>Included glyphs</h2>
          <p>Bootstrap comes with all 160 of <a href="http://glyphicons.com" target="_blank">Glyphicons</a> Halflings set, all available in font formats for easy coloring, sizing, and placement.</p>

          <ul class="the-icons clearfix">
            <li><i class="glyphicon-glass"></i> glyphicon-glass</li>
            <li><i class="glyphicon-music"></i> glyphicon-music</li>
            <li><i class="glyphicon-search"></i> glyphicon-search</li>
            <li><i class="glyphicon-envelope"></i> glyphicon-envelope</li>
            <li><i class="glyphicon-heart"></i> glyphicon-heart</li>
            <li><i class="glyphicon-star"></i> glyphicon-star</li>
            <li><i class="glyphicon-star-empty"></i> glyphicon-star-empty</li>
            <li><i class="glyphicon-user"></i> glyphicon-user</li>
            <li><i class="glyphicon-film"></i> glyphicon-film</li>
            <li><i class="glyphicon-th-large"></i> glyphicon-th-large</li>
            <li><i class="glyphicon-th"></i> glyphicon-th</li>
            <li><i class="glyphicon-th-list"></i> glyphicon-th-list</li>
            <li><i class="glyphicon-ok"></i> glyphicon-ok</li>
            <li><i class="glyphicon-remove"></i> glyphicon-remove</li>
            <li><i class="glyphicon-zoom-in"></i> glyphicon-zoom-in</li>
            <li><i class="glyphicon-zoom-out"></i> glyphicon-zoom-out</li>
            <li><i class="glyphicon-off"></i> glyphicon-off</li>
            <li><i class="glyphicon-signal"></i> glyphicon-signal</li>
            <li><i class="glyphicon-cog"></i> glyphicon-cog</li>
            <li><i class="glyphicon-trash"></i> glyphicon-trash</li>
            <li><i class="glyphicon-home"></i> glyphicon-home</li>
            <li><i class="glyphicon-file"></i> glyphicon-file</li>
            <li><i class="glyphicon-time"></i> glyphicon-time</li>
            <li><i class="glyphicon-road"></i> glyphicon-road</li>
            <li><i class="glyphicon-download-alt"></i> glyphicon-download-alt</li>
            <li><i class="glyphicon-download"></i> glyphicon-download</li>
            <li><i class="glyphicon-upload"></i> glyphicon-upload</li>
            <li><i class="glyphicon-inbox"></i> glyphicon-inbox</li>

            <li><i class="glyphicon-play-circle"></i> glyphicon-play-circle</li>
            <li><i class="glyphicon-repeat"></i> glyphicon-repeat</li>
            <li><i class="glyphicon-refresh"></i> glyphicon-refresh</li>
            <li><i class="glyphicon-list-alt"></i> glyphicon-list-alt</li>
            <li><i class="glyphicon-lock"></i> glyphicon-lock</li>
            <li><i class="glyphicon-flag"></i> glyphicon-flag</li>
            <li><i class="glyphicon-headphones"></i> glyphicon-headphones</li>
            <li><i class="glyphicon-volume-off"></i> glyphicon-volume-off</li>
            <li><i class="glyphicon-volume-down"></i> glyphicon-volume-down</li>
            <li><i class="glyphicon-volume-up"></i> glyphicon-volume-up</li>
            <li><i class="glyphicon-qrcode"></i> glyphicon-qrcode</li>
            <li><i class="glyphicon-barcode"></i> glyphicon-barcode</li>
            <li><i class="glyphicon-tag"></i> glyphicon-tag</li>
            <li><i class="glyphicon-tags"></i> glyphicon-tags</li>
            <li><i class="glyphicon-book"></i> glyphicon-book</li>
            <li><i class="glyphicon-bookmark"></i> glyphicon-bookmark</li>
            <li><i class="glyphicon-print"></i> glyphicon-print</li>
            <li><i class="glyphicon-camera"></i> glyphicon-camera</li>
            <li><i class="glyphicon-font"></i> glyphicon-font</li>
            <li><i class="glyphicon-bold"></i> glyphicon-bold</li>
            <li><i class="glyphicon-italic"></i> glyphicon-italic</li>
            <li><i class="glyphicon-text-height"></i> glyphicon-text-height</li>
            <li><i class="glyphicon-text-width"></i> glyphicon-text-width</li>
            <li><i class="glyphicon-align-left"></i> glyphicon-align-left</li>
            <li><i class="glyphicon-align-center"></i> glyphicon-align-center</li>
            <li><i class="glyphicon-align-right"></i> glyphicon-align-right</li>
            <li><i class="glyphicon-align-justify"></i> glyphicon-align-justify</li>
            <li><i class="glyphicon-list"></i> glyphicon-list</li>

            <li><i class="glyphicon-indent-left"></i> glyphicon-indent-left</li>
            <li><i class="glyphicon-indent-right"></i> glyphicon-indent-right</li>
            <li><i class="glyphicon-facetime-video"></i> glyphicon-facetime-video</li>
            <li><i class="glyphicon-picture"></i> glyphicon-picture</li>
            <li><i class="glyphicon-pencil"></i> glyphicon-pencil</li>
            <li><i class="glyphicon-map-marker"></i> glyphicon-map-marker</li>
            <li><i class="glyphicon-adjust"></i> glyphicon-adjust</li>
            <li><i class="glyphicon-tint"></i> glyphicon-tint</li>
            <li><i class="glyphicon-edit"></i> glyphicon-edit</li>
            <li><i class="glyphicon-share"></i> glyphicon-share</li>
            <li><i class="glyphicon-check"></i> glyphicon-check</li>
            <li><i class="glyphicon-move"></i> glyphicon-move</li>
            <li><i class="glyphicon-step-backward"></i> glyphicon-step-backward</li>
            <li><i class="glyphicon-fast-backward"></i> glyphicon-fast-backward</li>
            <li><i class="glyphicon-backward"></i> glyphicon-backward</li>
            <li><i class="glyphicon-play"></i> glyphicon-play</li>
            <li><i class="glyphicon-pause"></i> glyphicon-pause</li>
            <li><i class="glyphicon-stop"></i> glyphicon-stop</li>
            <li><i class="glyphicon-forward"></i> glyphicon-forward</li>
            <li><i class="glyphicon-fast-forward"></i> glyphicon-fast-forward</li>
            <li><i class="glyphicon-step-forward"></i> glyphicon-step-forward</li>
            <li><i class="glyphicon-eject"></i> glyphicon-eject</li>
            <li><i class="glyphicon-chevron-left"></i> glyphicon-chevron-left</li>
            <li><i class="glyphicon-chevron-right"></i> glyphicon-chevron-right</li>
            <li><i class="glyphicon-plus-sign"></i> glyphicon-plus-sign</li>
            <li><i class="glyphicon-minus-sign"></i> glyphicon-minus-sign</li>
            <li><i class="glyphicon-remove-sign"></i> glyphicon-remove-sign</li>
            <li><i class="glyphicon-ok-sign"></i> glyphicon-ok-sign</li>

            <li><i class="glyphicon-question-sign"></i> glyphicon-question-sign</li>
            <li><i class="glyphicon-info-sign"></i> glyphicon-info-sign</li>
            <li><i class="glyphicon-screenshot"></i> glyphicon-screenshot</li>
            <li><i class="glyphicon-remove-circle"></i> glyphicon-remove-circle</li>
            <li><i class="glyphicon-ok-circle"></i> glyphicon-ok-circle</li>
            <li><i class="glyphicon-ban-circle"></i> glyphicon-ban-circle</li>
            <li><i class="glyphicon-arrow-left"></i> glyphicon-arrow-left</li>
            <li><i class="glyphicon-arrow-right"></i> glyphicon-arrow-right</li>
            <li><i class="glyphicon-arrow-up"></i> glyphicon-arrow-up</li>
            <li><i class="glyphicon-arrow-down"></i> glyphicon-arrow-down</li>
            <li><i class="glyphicon-share-alt"></i> glyphicon-share-alt</li>
            <li><i class="glyphicon-resize-full"></i> glyphicon-resize-full</li>
            <li><i class="glyphicon-resize-small"></i> glyphicon-resize-small</li>
            <li><i class="glyphicon-plus"></i> glyphicon-plus</li>
            <li><i class="glyphicon-minus"></i> glyphicon-minus</li>
            <li><i class="glyphicon-asterisk"></i> glyphicon-asterisk</li>
            <li><i class="glyphicon-exclamation-sign"></i> glyphicon-exclamation-sign</li>
            <li><i class="glyphicon-gift"></i> glyphicon-gift</li>
            <li><i class="glyphicon-leaf"></i> glyphicon-leaf</li>
            <li><i class="glyphicon-fire"></i> glyphicon-fire</li>
            <li><i class="glyphicon-eye-open"></i> glyphicon-eye-open</li>
            <li><i class="glyphicon-eye-close"></i> glyphicon-eye-close</li>
            <li><i class="glyphicon-warning-sign"></i> glyphicon-warning-sign</li>
            <li><i class="glyphicon-plane"></i> glyphicon-plane</li>
            <li><i class="glyphicon-calendar"></i> glyphicon-calendar</li>
            <li><i class="glyphicon-random"></i> glyphicon-random</li>
            <li><i class="glyphicon-comment"></i> glyphicon-comment</li>
            <li><i class="glyphicon-magnet"></i> glyphicon-magnet</li>

            <li><i class="glyphicon-chevron-up"></i> glyphicon-chevron-up</li>
            <li><i class="glyphicon-chevron-down"></i> glyphicon-chevron-down</li>
            <li><i class="glyphicon-retweet"></i> glyphicon-retweet</li>
            <li><i class="glyphicon-shopping-cart"></i> glyphicon-shopping-cart</li>
            <li><i class="glyphicon-folder-close"></i> glyphicon-folder-close</li>
            <li><i class="glyphicon-folder-open"></i> glyphicon-folder-open</li>
            <li><i class="glyphicon-resize-vertical"></i> glyphicon-resize-vertical</li>
            <li><i class="glyphicon-resize-horizontal"></i> glyphicon-resize-horizontal</li>
            <li><i class="glyphicon-hdd"></i> glyphicon-hdd</li>
            <li><i class="glyphicon-bullhorn"></i> glyphicon-bullhorn</li>
            <li><i class="glyphicon-bell"></i> glyphicon-bell</li>
            <li><i class="glyphicon-certificate"></i> glyphicon-certificate</li>
            <li><i class="glyphicon-thumbs-up"></i> glyphicon-thumbs-up</li>
            <li><i class="glyphicon-thumbs-down"></i> glyphicon-thumbs-down</li>
            <li><i class="glyphicon-hand-right"></i> glyphicon-hand-right</li>
            <li><i class="glyphicon-hand-left"></i> glyphicon-hand-left</li>
            <li><i class="glyphicon-hand-up"></i> glyphicon-hand-up</li>
            <li><i class="glyphicon-hand-down"></i> glyphicon-hand-down</li>
            <li><i class="glyphicon-circle-arrow-right"></i> glyphicon-circle-arrow-right</li>
            <li><i class="glyphicon-circle-arrow-left"></i> glyphicon-circle-arrow-left</li>
            <li><i class="glyphicon-circle-arrow-up"></i> glyphicon-circle-arrow-up</li>
            <li><i class="glyphicon-circle-arrow-down"></i> glyphicon-circle-arrow-down</li>
            <li><i class="glyphicon-globe"></i> glyphicon-globe</li>
            <li><i class="glyphicon-wrench"></i> glyphicon-wrench</li>
            <li><i class="glyphicon-tasks"></i> glyphicon-tasks</li>
            <li><i class="glyphicon-filter"></i> glyphicon-filter</li>
            <li><i class="glyphicon-briefcase"></i> glyphicon-briefcase</li>
            <li><i class="glyphicon-fullscreen"></i> glyphicon-fullscreen</li>

            <li><i class="glyphicon-dashboard"></i> glyphicon-dashboard</li>
            <li><i class="glyphicon-paperclip"></i> glyphicon-paperclip</li>
            <li><i class="glyphicon-heart-empty"></i> glyphicon-heart-empty</li>
            <li><i class="glyphicon-link"></i> glyphicon-link</li>
            <li><i class="glyphicon-phone"></i> glyphicon-phone</li>
            <li><i class="glyphicon-pushpin"></i> glyphicon-pushpin</li>
            <li><i class="glyphicon-euro"></i> glyphicon-euro</li>
            <li><i class="glyphicon-usd"></i> glyphicon-usd</li>
            <li><i class="glyphicon-gbp"></i> glyphicon-gbp</li>
            <li><i class="glyphicon-sort"></i> glyphicon-sort</li>
            <li><i class="glyphicon-sort-by-alphabet"></i> glyphicon-sort-by-alphabet</li>
            <li><i class="glyphicon-sort-by-alphabet-alt"></i> glyphicon-sort-by-alphabet-alt</li>
            <li><i class="glyphicon-sort-by-order"></i> glyphicon-sort-by-order</li>
            <li><i class="glyphicon-sort-by-order-alt"></i> glyphicon-sort-by-order-alt</li>
            <li><i class="glyphicon-sort-by-attributes"></i> glyphicon-sort-by-attributes</li>
            <li><i class="glyphicon-sort-by-attributes-alt"></i> glyphicon-sort-by-attributes-alt</li>
            <li><i class="glyphicon-unchecked"></i> glyphicon-unchecked</li>
            <li><i class="glyphicon-expand"></i> glyphicon-expand</li>
            <li><i class="glyphicon-collapse"></i> glyphicon-collapse</li>
            <li><i class="glyphicon-collapse-top"></i> glyphicon-collapse-top</li>

          </ul>

          <h3>Glyphicons attribution</h3>
          <p><a href="http://glyphicons.com/">Glyphicons</a> Halflings are normally not available for free, but an arrangement between Bootstrap and the Glyphicons creator have made this possible at no cost to you as developers. As a thank you, we ask you to include an optional link back to <a href="http://glyphicons.com/">Glyphicons</a> whenever practical.</p>


          <hr class="bs-docs-separator">


          <h2>How to use</h2>
          <p>Add the appropriate class to any inline element. All icon classes are prefixed with <code>glyphicon-</code> for easy styling. To use, place the following code just about anywhere:</p>
          <pre class="prettyprint linenums">
            &lt;i class="glyphicon-search"&gt;&lt;/i&gt;
          </pre>
          <p>Want to change the icon color? Just change the <code>color</code> of the parent element.</p>
          <p>
            <span class="label label-info">Heads up!</span>
            When using beside strings of text, as in buttons or nav links, be sure to leave a space after the icon for proper spacing.
          </p>


          <hr class="bs-docs-separator">


          <h2>Icon examples</h2>
          <p>Use them in buttons, button groups for a toolbar, navigation, or prepended form inputs.</p>

          <h4>Buttons</h4>

          <h5>Button group in a button toolbar</h5>
          <div class="bs-docs-example">
            <div class="btn-toolbar">
              <div class="btn-group">
                <a class="btn" href="#"><i class="glyphicon-align-left"></i></a>
                <a class="btn" href="#"><i class="glyphicon-align-center"></i></a>
                <a class="btn" href="#"><i class="glyphicon-align-right"></i></a>
                <a class="btn" href="#"><i class="glyphicon-align-justify"></i></a>
              </div>
            </div>
          </div>
          <pre class="prettyprint linenums">
            &lt;div class="btn-toolbar"&gt;
            &lt;div class="btn-group"&gt;

            &lt;a class="btn" href="#"&gt;&lt;i class="glyphicon-align-left"&gt;&lt;/i&gt;&lt;/a&gt;
            &lt;a class="btn" href="#"&gt;&lt;i class="glyphicon-align-center"&gt;&lt;/i&gt;&lt;/a&gt;
            &lt;a class="btn" href="#"&gt;&lt;i class="glyphicon-align-right"&gt;&lt;/i&gt;&lt;/a&gt;
            &lt;a class="btn" href="#"&gt;&lt;i class="glyphicon-align-justify"&gt;&lt;/i&gt;&lt;/a&gt;
            &lt;/div&gt;
            &lt;/div&gt;
          </pre>

          <h5>Dropdown in a button group</h5>
          <div class="bs-docs-example">
            <div class="btn-group">
              <a class="btn btn-primary" href="#"><i class="glyphicon-user icon-white"></i> User</a>
              <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="#"><i class="glyphicon-pencil"></i> Edit</a></li>
                <li><a href="#"><i class="glyphicon-trash"></i> Delete</a></li>
                <li><a href="#"><i class="glyphicon-ban-circle"></i> Ban</a></li>
                <li class="divider"></li>
                <li><a href="#"><i class="i"></i> Make admin</a></li>
              </ul>
            </div>
          </div>
          <pre class="prettyprint linenums">
            &lt;div class="btn-group"&gt;
            &lt;a class="btn btn-primary" href="#"&gt;&lt;i class="glyphicon-user icon-white"&gt;&lt;/i&gt; User&lt;/a&gt;
            &lt;a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" href="#"&gt;&lt;span class="caret"&gt;&lt;/span&gt;&lt;/a&gt;
            &lt;ul class="dropdown-menu"&gt;
            &lt;li&gt;&lt;a href="#"&gt;&lt;i class="glyphicon-pencil"&gt;&lt;/i&gt; Edit&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;&lt;i class="glyphicon-trash"&gt;&lt;/i&gt; Delete&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;&lt;i class="glyphicon-ban-circle"&gt;&lt;/i&gt; Ban&lt;/a&gt;&lt;/li&gt;
            &lt;li class="divider"&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;&lt;i class="i"&gt;&lt;/i&gt; Make admin&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
            &lt;/div&gt;
          </pre>

          <h5>Large button</h5>
          <div class="bs-docs-example">
            <a class="btn btn-large" href="#"><i class="icon-star"></i> Star</a>
          </div>
          <pre class="prettyprint linenums">
            &lt;a class="btn btn-large" href="#"&gt;&lt;i class="icon-star"&gt;&lt;/i&gt; Star&lt;/a&gt;
          </pre>

          <h5>Small button</h5>
          <div class="bs-docs-example">
            <a class="btn btn-small" href="#"><i class="glyphicon-star"></i></a>
          </div>
          <pre class="prettyprint linenums">
            &lt;a class="btn btn-small" href="#"&gt;&lt;i class="glyphicon-star"&gt;&lt;/i&gt;&lt;/a&gt;
          </pre>


          <h4>Navigation</h4>
          <div class="bs-docs-example">
            <div class="well" style="padding: 8px 0; margin-bottom: 0;">
              <ul class="nav nav-list">
                <li class="active"><a href="#"><i class="glyphicon-home icon-white"></i> Home</a></li>
                <li><a href="#"><i class="glyphicon-book"></i> Library</a></li>
                <li><a href="#"><i class="glyphicon-pencil"></i> Applications</a></li>
                <li><a href="#"><i class="i"></i> Misc</a></li>
              </ul>
            </div>
          </div>
          <pre class="prettyprint linenums">
            &lt;ul class="nav nav-list"&gt;
            &lt;li class="active"&gt;&lt;a href="#"&gt;&lt;i class="glyphicon-home icon-white"&gt;&lt;/i&gt; Home&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;&lt;i class="glyphicon-book"&gt;&lt;/i&gt; Library&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;&lt;i class="glyphicon-pencil"&gt;&lt;/i&gt; Applications&lt;/a&gt;&lt;/li&gt;
            &lt;li&gt;&lt;a href="#"&gt;&lt;i class="i"&gt;&lt;/i&gt; Misc&lt;/a&gt;&lt;/li&gt;
            &lt;/ul&gt;
          </pre>

          <h4>Form fields</h4>
          <form class="bs-docs-example form-horizontal">
            <div class="control-group">
              <label class="control-label" for="inputIcon">Email address</label>
              <div class="controls">
                <div class="input-prepend">
                  <span class="add-on"><i class="glyphicon-envelope"></i></span><input class="span2" id="inputIcon" type="text">
                </div>
              </div>
            </div>
          </form>
          <pre class="prettyprint linenums">
            &lt;div class="control-group"&gt;
            &lt;label class="control-label" for="inputIcon"&gt;Email address&lt;/label&gt;
            &lt;div class="controls"&gt;
            &lt;div class="input-prepend"&gt;
            &lt;span class="add-on"&gt;&lt;i class="glyphicon-envelope"&gt;&lt;/i&gt;&lt;/span&gt;
            &lt;input class="span2" id="inputIcon" type="text"&gt;
            &lt;/div&gt;
            &lt;/div&gt;
            &lt;/div&gt;
          </pre>

        </section>



        <!-- Responsive design
        ================================================== -->
        <section id="responsive">
          <div class="page-header">
            <h1>Responsive design</h1>
          </div>

          <h2>Enabling responsive features</h2>
          <p>Responsive CSS requires the following meta tag in the <code>&lt;head&gt;</code> of your pages.</p>
          <pre class="prettyprint linenums">
            &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
          </pre>

          <h3>Supported devices</h3>
          <p>Bootstrap supports a handful of media queries to help make your projects more appropriate on different devices and screen resolutions. Here's what's included:</p>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Label</th>
                <th>Layout width</th>
                <th>Column width</th>
                <th>Gutter width</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Large display</td>
                <td>1200px and up</td>
                <td>70px</td>
                <td>30px</td>
              </tr>
              <tr>
                <td>Default</td>
                <td>980px and up</td>
                <td>60px</td>
                <td>20px</td>
              </tr>
              <tr>
                <td>Portrait tablets</td>
                <td>768px and above</td>
                <td>42px</td>
                <td>20px</td>
              </tr>
              <tr>
                <td>Phones to tablets</td>
                <td>767px and below</td>
                <td class="muted" colspan="2">Fluid columns, no fixed widths</td>
              </tr>
              <tr>
                <td>Phones</td>
                <td>480px and below</td>
                <td class="muted" colspan="2">Fluid columns, no fixed widths</td>
              </tr>
            </tbody>
          </table>
          <pre class="prettyprint linenums">
            /* Large desktop */
            @media (min-width: 1200px) { ... }

            /* Portrait tablet to landscape and desktop */
            @media (min-width: 768px) and (max-width: 979px) { ... }

            /* Landscape phone to portrait tablet */
            @media (max-width: 767px) { ... }

            /* Landscape phones and down */
            @media (max-width: 480px) { ... }
          </pre>


          <h2>Responsive utility classes</h2>
          <p>For faster mobile-friendly development, use these utility classes for showing and hiding content by device. Below is a table of the available classes and their effect on a given media query layout (labeled by device).</p>
          <table class="table table-bordered table-striped responsive-utilities">
            <thead>
              <tr>
                <th>Class</th>
                <th>Phones <small>767px and below</small></th>
                <th>Tablets <small>979px to 768px</small></th>
                <th>Desktops <small>Default</small></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th><code>.visible-phone</code></th>
                <td class="is-visible">Visible</td>
                <td class="is-hidden">Hidden</td>
                <td class="is-hidden">Hidden</td>
              </tr>
              <tr>
                <th><code>.visible-tablet</code></th>
                <td class="is-hidden">Hidden</td>
                <td class="is-visible">Visible</td>
                <td class="is-hidden">Hidden</td>
              </tr>
              <tr>
                <th><code>.visible-desktop</code></th>
                <td class="is-hidden">Hidden</td>
                <td class="is-hidden">Hidden</td>
                <td class="is-visible">Visible</td>
              </tr>
              <tr>
                <th><code>.hidden-phone</code></th>
                <td class="is-hidden">Hidden</td>
                <td class="is-visible">Visible</td>
                <td class="is-visible">Visible</td>
              </tr>
              <tr>
                <th><code>.hidden-tablet</code></th>
                <td class="is-visible">Visible</td>
                <td class="is-hidden">Hidden</td>
                <td class="is-visible">Visible</td>
              </tr>
              <tr>
                <th><code>.hidden-desktop</code></th>
                <td class="is-visible">Visible</td>
                <td class="is-visible">Visible</td>
                <td class="is-hidden">Hidden</td>
              </tr>
            </tbody>
          </table>

          <h3>When to use</h3>
          <p>Use on a limited basis and avoid creating entirely different versions of the same site. Instead, use them to complement each device's presentation. Responsive utilities should not be used with tables, and as such are not supported.</p>

          <h3>Responsive utilities test case</h3>
          <p>Resize your browser or load on different devices to test the above classes.</p>
          <h4>Visible on...</h4>
          <p>Green checkmarks indicate that class is visible in your current viewport.</p>
          <ul class="responsive-utilities-test">
            <li>Phone<span class="visible-phone">&#10004; Phone</span></li>
            <li>Tablet<span class="visible-tablet">&#10004; Tablet</span></li>
            <li>Desktop<span class="visible-desktop">&#10004; Desktop</span></li>
          </ul>
          <h4>Hidden on...</h4>
          <p>Here, green checkmarks indicate that class is hidden in your current viewport.</p>
          <ul class="responsive-utilities-test hidden-on">
            <li>Phone<span class="hidden-phone">&#10004; Phone</span></li>
            <li>Tablet<span class="hidden-tablet">&#10004; Tablet</span></li>
            <li>Desktop<span class="hidden-desktop">&#10004; Desktop</span></li>
          </ul>

        </section>

      </div>
    </div>

  </div>

<?php endwhile; ?>

<?php get_footer(); ?>