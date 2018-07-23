<?php
				$username = 'SOAPUSER';
				$password = 'SOAPPASSWORD';
				$host = "localhost";
				$soapport = 7878;
				$command = "server info";
				$client = new SoapClient(NULL,
				array(
					"location" => "http://$host:$soapport/",
					"uri" => "urn:MaNGOS",
					"style" => SOAP_RPC,
					'login' => $username,
					'password' => $password
				));
				try {
					$result = $client->executeCommand(new SoapParam($command, "command"));
					//echo "Command succeeded! Output:<br />\n";
					$pos = strpos($result,"Online players:");
					//echo "position is: $pos </br>";
					$onlineCount = substr($result, $pos, 27);
					$pos = strpos($result,"Server uptime:");
					$uptime = substr($result, $pos);
					echo "
						<h3>
							$onlineCount </br>
							$uptime </br>
						</h3>
					"; //End of echo
					//echo $result;
				}
				catch (Exception $e)
				{
					echo "Command failed! Reason:<br />\n";
					echo $e->getMessage();
				}
?>