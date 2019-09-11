<?php
    class LowestNumberFinder {
        public function getLowest(string $numbers): int {
            $numbers_array = str_getcsv($numbers);

            if (is_array($numbers_array)) {
                return $this->calculateLowest($numbers_array);
            }
            else {
                throw new Exception("Value must be a CSV list of integers");
            }
        }

        private function calculateLowest(array $numbers): int {
            $numbers = array_map(function($n) { return (int) $n; }, $numbers);

            array_unique($numbers, SORT_NUMERIC);
            sort($numbers, SORT_NUMERIC);

            $numbers = array_filter($numbers, function ($n) { return $n > 0; });

            $expected = 1;

            foreach ($numbers as $number) {
                if ($number == $expected) {
                    $expected++;
                }
                else {
                    break;
                }
            }

            return $expected;
        }
    }
?>