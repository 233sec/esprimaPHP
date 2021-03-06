<?php 

 namespace test;
 class ExpressionStatementTest extends BaseTestCase 
 {
protected function getFixtures()
{
    return array(
        "x" => json_decode('{"type":"ExpressionStatement","expression":{"type":"Identifier","name":"x","range":[0,1],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":1}}},"range":[0,1],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":1}}}'),
        "x, y" => json_decode('{"type":"ExpressionStatement","expression":{"type":"SequenceExpression","expressions":[{"type":"Identifier","name":"x","range":[0,1],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":1}}},{"type":"Identifier","name":"y","range":[3,4],"loc":{"start":{"line":1,"column":3},"end":{"line":1,"column":4}}}],"range":[0,4],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":4}}},"range":[0,4],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":4}}}'),
        "\\u0061" => json_decode('{"type":"ExpressionStatement","expression":{"type":"Identifier","name":"a","range":[0,6],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":6}}},"range":[0,6],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":6}}}'),
        "a\\u0061" => json_decode('{"type":"ExpressionStatement","expression":{"type":"Identifier","name":"aa","range":[0,7],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":7}}},"range":[0,7],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":7}}}'),
        "\\u0061a" => json_decode('{"type":"ExpressionStatement","expression":{"type":"Identifier","name":"aa","range":[0,7],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":7}}},"range":[0,7],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":7}}}'),
        "\\u0061a " => json_decode('{"type":"ExpressionStatement","expression":{"type":"Identifier","name":"aa","range":[0,7],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":7}}},"range":[0,8],"loc":{"start":{"line":1,"column":0},"end":{"line":1,"column":8}}}'),
    );
}
}
