<?php
/**
 * Created by PhpStorm.
 * User: szaboferee
 * Date: 12/19/14
 * Time: 7:51 PM
 */
namespace test;

class PrimaryExpressionsTest extends BaseTestCase
{

	protected function getFixtures()
	{
		return json_decode('{"this\n": {"type": "Program","body": [{"type": "ExpressionStatement","expression": {"type": "ThisExpression","range": [0,4],"loc": {"start": {"line": 1,"column": 0},"end": {"line": 1,"column": 4}}},"range": [0,5],"loc": {"start": {"line": 1,"column": 0},"end": {"line": 2,"column": 0}}}],"range": [0,5],"loc": {"start": {"line": 1,"column": 0},"end": {"line": 2,"column": 0}},"tokens": [{"type": "Keyword","value": "this","range": [0,4],"loc": {"start": {"line": 1,"column": 0},"end": {"line": 1,"column": 4}}}]},"null\n": {"type": "Program","body": [{"type": "ExpressionStatement","expression": {"type": "Literal","value": null,"raw": "null","range": [0,4],"loc": {"start": {"line": 1,"column": 0},"end": {"line": 1,"column": 4}}},"range": [0,5],"loc": {"start": {"line": 1,"column": 0},"end": {"line": 2,"column": 0}}}],"range": [0,5],"loc": {"start": {"line": 1,"column": 0},"end": {"line": 2,"column": 0}},"tokens": [{"type": "Null","value": "null","range": [0,4],"loc": {"start": {"line": 1,"column": 0},"end": {"line": 1,"column": 4}}}]},"\n    42\n\n": {"type": "Program","body": [{"type": "ExpressionStatement","expression": {"type": "Literal","value": 42,"raw": "42","range": [5,7],"loc": {"start": {"line": 2,"column": 4},"end": {"line": 2,"column": 6}}},"range": [5,9],"loc": {"start": {"line": 2,"column": 4},"end": {"line": 4,"column": 0}}}],"range": [5,9],"loc": {"start": {"line": 2,"column": 4},"end": {"line": 4,"column": 0}},"tokens": [{"type": "Numeric","value": "42","range": [5,7],"loc": {"start": {"line": 2,"column": 4},"end": {"line": 2,"column": 6}}}]},"(1 + 2 ) * 3": {"type": "ExpressionStatement","expression": {"type": "BinaryExpression","operator": "*","left": {"type": "BinaryExpression","operator": "+","left": {"type": "Literal","value": 1,"raw": "1","range": [1,2],"loc": {"start": {"line": 1,"column": 1},"end": {"line": 1,"column": 2}}},"right": {"type": "Literal","value": 2,"raw": "2","range": [5,6],"loc": {"start": {"line": 1,"column": 5},"end": {"line": 1,"column": 6}}},"range": [1,6],"loc": {"start": {"line": 1,"column": 1},"end": {"line": 1,"column": 6}}},"right": {"type": "Literal","value": 3,"raw": "3","range": [11,12],"loc": {"start": {"line": 1,"column": 11},"end": {"line": 1,"column": 12}}},"range": [0,12],"loc": {"start": {"line": 1,"column": 0},"end": {"line": 1,"column": 12}}},"range": [0,12],"loc": {"start": {"line": 1,"column": 0},"end": {"line": 1,"column": 12}}}}');
	}
}