<?php

$age = "65";

if ($age <= 2) {
    echo "Children under the age of 2 are free";
} else if ($age >= 2 && $age <= 12) {
    echo "Pay R20 Sucker";
} else if ($age >= 12 && $age <= 17) {
    echo "Pay R30 Sucker";
} else if ($age >= 17 && $age <= 25) {
    echo "Pay R40 Sucker";
} else if ($age >= 25 && $age <= 64) {
    echo "Pay R60 Sucker";
} else if ($age >= 64 && $age <= 100) {
    echo "Pay R30 Sucker";
} else {
    echo "bleh";
}
