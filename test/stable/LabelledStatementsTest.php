<?php 

 namespace test;
 class LabelledStatementsTest extends BaseTestCase 
 {
protected function getFixtures()
{
	return json_decode('
{"start: for (;;) break start":{"type":"LabeledStatement","label":{"type":"Identifier","name":"start","range":[0,5],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":5}}},"body":{"type":"ForStatement","init":null,"test":null,"update":null,"body":{"type":"BreakStatement","label":{"type":"Identifier","name":"start","range":[22,27],"loc":{"start":{"line":1,"column":22},"end":{"line":1,"column":27}}},"range":[16,27],"loc":{"start":{"line":1,"column":16},"end":{"line":1,"column":27}}},"range":[7,27],"loc":{"start":{"line":1,"column":7},"end":{"line":1,"column":27}}},"range":[0,27],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":27}}},"start: while (true) break start":{"type":"LabeledStatement","label":{"type":"Identifier","name":"start","range":[0,5],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":5}}},"body":{"type":"WhileStatement","test":{"type":"Literal","value":true,"raw":"true","range":[14,18],"loc":{"start":{"line":1,"column":14},"end":{"line":1,"column":18}}},"body":{"type":"BreakStatement","label":{"type":"Identifier","name":"start","range":[26,31],"loc":{"start":{"line":1,"column":26},"end":{"line":1,"column":31}}},"range":[20,31],"loc":{"start":{"line":1,"column":20},"end":{"line":1,"column":31}}},"range":[7,31],"loc":{"start":{"line":1,"column":7},"end":{"line":1,"column":31}}},"range":[0,31],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":31}}},"__proto__: test":{"type":"LabeledStatement","label":{"type":"Identifier","name":"__proto__","range":[0,9],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":9}}},"body":{"type":"ExpressionStatement","expression":{"type":"Identifier","name":"test","range":[11,15],"loc":{"start":{"line":1,"column":11},"end":{"line":1,"column":15}}},"range":[11,15],"loc":{"start":{"line":1,"column":11},"end":{"line":1,"column":15}}},"range":[0,15],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":15}}}}');
}
}
