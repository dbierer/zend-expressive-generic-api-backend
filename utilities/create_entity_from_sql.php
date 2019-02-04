<?php
// generates Entity class from database table definition

$tables[] = <<<EOT
CREATE TABLE `user` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(128) NOT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_password` varchar(1024) NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
EOT;
$tables[] = <<<EOT
CREATE TABLE `group` (
  `groupID` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(128) NOT NULL,
  PRIMARY KEY (`groupID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
EOT;
$tables[] = <<<EOT
CREATE TABLE `permission` (
  `permissionID` int(11) NOT NULL AUTO_INCREMENT,
  `permission_tag` varchar(128) NOT NULL,
  PRIMARY KEY (`permissionID`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;
EOT;

foreach ($tables as $create) {
    $lines = explode("\n", $create);
    preg_match('/CREATE TABLE `(.*?)`/', $create, $matches);
    $tableName = ucfirst($matches[1]);

    $output = '<?php ' . PHP_EOL . 'namespace Common\Entity;' . PHP_EOL . PHP_EOL;
    $output .= "/**\n * Represents `" . strtolower($tableName) . "` table\n *\n";
    $output .= $create;
    $output .= "\n *\n * @author: doug@unlikelysource.com\n * @OA\Schema(schema=\"Common\\Entity\\" . $tableName . "\")\n */\n\n";
    $output .= 'class ' . $tableName . ' extends Base' . PHP_EOL;
    $output .= '{' . PHP_EOL;

    foreach ($lines as $item) {
        if (strpos($item, '`') && strpos($item, 'PRIMARY') === FALSE) {
            $breakdown = explode(' ', trim($item));
            $var = str_replace('`', '', $breakdown[0]);
            $type = $breakdown[1];
            $output .= '    /**' . PHP_EOL;
            $output .= '     * @var ' . $type . ' ' . PHP_EOL;
            $output .= '     * @OA\Property()'. PHP_EOL;
            $output .= '     */' . PHP_EOL;
            $output .= '    public $' . $var . ';' . PHP_EOL . PHP_EOL;
        }
    }

    $output .= '}' . PHP_EOL;
    echo $output;
}
