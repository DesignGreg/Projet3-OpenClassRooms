<?php
    header('Content-Disposition: attachment; filename="form-to-csv.csv"');
    header('Content-Type: text/csv');
    readfile('C:\Users\huygh\Desktop\form-to-csv.csv');
