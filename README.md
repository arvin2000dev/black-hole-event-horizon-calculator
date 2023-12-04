# Black Hole Event Horizon Calculator

This PHP script estimates the distance from the center of a black hole at which you need to be positioned to avoid crossing its event horizon. It's based on the Schwarzschild radius calculation formula for non-rotating black holes.

## Algorithm Used

The script employs the Schwarzschild radius formula:
$R_s = \\frac{{2GM}}{{c^2}}$

Where:
- \( R_s \) is the Schwarzschild radius (event horizon).
- \( G \) is the gravitational constant.
- \( M \) is the mass of the black hole.
- \( c \) is the speed of light.

## Usage

1. Modify the `calculateEventHorizonDistance()` function by inputting the mass of the black hole.
2. Run the script to calculate the distance needed to avoid the event horizon for that particular mass.
3. Explore and utilize the function to estimate event horizons for various masses.

### Example Usage

```php
$mass_of_the_sun = 1.989 * pow(10, 30);
echo "If the black hole's mass were: " . $mass_of_the_sun . " then you would have to stay at: " . calculateEventHorizonDistance($mass_of_the_sun) . " meters to avoid its event horizon";
```
