<?php
	$article = new stdClass();
	//$article->title = "An example article";
	//$article->summary = "An example of posting JSON encoded data to a web service";
	$json_data = json_encode($article);
	$post = file_get_contents('http://localhost:9090/rest/retailservice/config/reports',null,stream_context_create(array(
		'http' => array(
			'protocol_version' => 1.1,
			'user_agent'       => 'PHPExample',
			'method'           => 'POST',
			'header'           => "Content-type: application/json\r\n".
								  "Connection: close\r\n" .
								  "Content-length: " . strlen($json_data) . "\r\n",
			'content'          => $json_data,
		),
	)));
	if ($post) {
		echo $post;
		//$output_jason = json_encode($post);
		//echo $output_jason;
	} else {
		echo "POST failed";
	}
?>