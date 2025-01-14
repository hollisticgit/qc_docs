    <li class="csharp">Load the required assembly files and data types. You need to load assemblies at the start in their own cell.</li>
    <div class="csharp section-example-container">
        <pre class="csharp">#load "../Initialize.csx"</pre>
    </div>
    <li class="csharp">Import the data types.</li>
    <div class="csharp section-example-container">
        <pre class="csharp">#load "../QuantConnect.csx"
#r "../Microsoft.Data.Analysis.dll"

using QuantConnect;
using QuantConnect.Data;
using QuantConnect.Algorithm;
using QuantConnect.Research;
using QuantConnect.Indicators;
<?=$additionalImports?>
using Microsoft.Data.Analysis;</pre>
    </div>