<?php
    class Entry {
        public function __construct($pHash, $index, $status) {
            $this->pHash = $pHash;
            $this->index = $index;
            date_default_timezone_set("Asia/Singapore");
            $timestamp = ((string)date("Y/m/d, H:i:s"));
            $this->timestamp = $timestamp;
            $nonce = ((integer)0);
            $data = $pHash.$index.$timestamp.((string)$nonce).$status;
            $hash = hash("sha256", $data);
            $difficulty = 5;

            while (substr($hash, 0, $difficulty) !== str_repeat("0", $difficulty)) {
                $nonce++;
                $data = $pHash.$index.$timestamp.((string)$nonce).$status;
                $hash = hash("sha256", $data);
            }
            $this->nonce = $nonce;
            $this->status = $status;
            $this->hash = $hash;
       }
    }

    class COC {
        public function __construct($index, $title) {
            $this->chain = [$this->createGenesisBlock($index, $title)];
            $this->checkin();
        }

        private function createGenesisBlock($index, $title) {
            return new Entry("", $index, $title);
        }
        
        public function getLastEntry() {
            return $this->chain[count($this->chain)-1];
        }

        public function checkin() {
            $lEntry = $this->getLastEntry();
            $nEntry = new Entry($lEntry->hash, ((integer)($lEntry->index + 1)), "check-in");
            array_push($this->chain, $nEntry);
        }

        public function checkout() {
            $lEntry = $this->getLastEntry();
            $nEntry = new Entry($lEntry->hash, ((integer)($lEntry->index + 1)), "check-out");
            array_push($this->chain, $nEntry);
        }

        public function isValid() {
            if (count($this->chain) == 1) {
                return true;
            } else {
                for ($i = 1; $i < count($this->chain); $i++) {
                    $cEntry = $this->chain[$i];
                    $pEntry = $this->chain[$i-1];
                    
                    $data = ($cEntry->pHash).($cEntry->index).($cEntry->timestamp).($cEntry->nonce).($cEntry->status);

                    if ($cEntry->hash == hash("sha256", $data)) {
                        if ($cEntry->pHash == $pEntry->hash) {
                            if ($i == (count($this->chain)-1)) {
                                return true;
                            } else{
                                return false;
                                break;
                            }
                        } else{
                            return false;
                            break;
                        }
                    } else {
                        return false;
                        break;
                    }
                }
            }
        }
    }
?>