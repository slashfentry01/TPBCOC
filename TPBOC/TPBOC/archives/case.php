<?php
    class Evidence {
        public function __construct($pHash, $index, $title, $description, $ipath) {
            $this->pHash = $pHash;
            $this->index = $index;
            date_default_timezone_set("Asia/Singapore");
            $timestamp = ((string)date("Y/m/d, H:i:s"));
            $this->timestamp = $timestamp;
            $nonce = ((integer)0);
            $data = $pHash.$index.$timestamp.((string)$nonce).$title.$description;
            $hash = hash("sha256", $data);
            $difficulty = 5;

            while (substr($hash, 0, $difficulty) !== str_repeat("0", $difficulty)) {
                $nonce++;
                $data = $pHash.$index.$timestamp.((string)$nonce).$title.$description.$ipath;
                $hash = hash("sha256", $data);
            }
            $this->nonce = $nonce;
            $this->title = $title;
            $this->description = $description;
            $this->Ipath = $ipath;
            $this->hash = $hash;
       }
    }

    class pCase {
        public function __construct($cID, $cDescription, $image) {
            $this->chain = [$this->createGenesisBlock($cID, $cDescription, $image)];
        }

        private function createGenesisBlock($cID, $cDescription, $image) {
            date_default_timezone_set("Asia/Singapore");
            $index = ((integer)(date("YmdHis")."000"));
            return new Evidence("", ((integer)$index), $cID, $cDescription, $image);
        }
        
        public function getLastEvidence() {
            return $this->chain[count($this->chain)-1];
        }

        public function addEvidence($title, $description, $image) {
            $lEvidence = $this->getLastEvidence();
            $nEvidence = new Evidence($lEvidence->hash, ((integer)($lEvidence->index + 1)), $title, $description, $image);
            array_push($this->chain, $nEvidence);
        }

        public function isValid() {
            if (count($this->chain) == 1) {
                return true;
            } else {
                for ($i = 1; $i < count($this->chain); $i++) {
                    $cEvidence = $this->chain[$i];
                    $pEvidence = $this->chain[$i-1];
                    
                    $data = ($cEvidence->pHash).($cEvidence->index).($cEvidence->timestamp).($cEvidence->nonce).($cEvidence->title).($cEvidence->description).($cEvidence->Ipath);

                    if ($cEvidence->hash == hash("sha256", $data)) {
                        if ($cEvidence->pHash == $pEvidence->hash) {
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