class Car {
    
    public function __construct($brand, $make_year) {
        $this->brand = $brand;
        $this->make_year = $make_year;
    }
    
    public function print_details() {
        echo "This car is a " . $this->make_year . " " . $this->brand
            . ".\n";
    }
}
