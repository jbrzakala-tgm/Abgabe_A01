package jdcb;

public class airport {

	String country;
	String city;
	String airportcode;
	String name;
	
	public airport(String cntry, String cty, String aircode, String n){
		cntry = country;
		cty = city;
		aircode = airportcode;
		n = name;
	}

	public String getCountry() {
		return country;
	}

	public void setCountry(String country) {
		this.country = country;
	}

	public String getCity() {
		return city;
	}

	public void setCity(String city) {
		this.city = city;
	}

	public String getAirportcode() {
		return airportcode;
	}

	public void setAirportcode(String airportcode) {
		this.airportcode = airportcode;
	}

	public String getName() {
		return name;
	}

	public void setName(String name) {
		this.name = name;
	}

	@Override
	public String toString() {
		return "Flughafen [country=" + country + ", city=" + city + ", airportcode=" + airportcode + ", name=" + name
				+ "]";
	}
	
	
}
