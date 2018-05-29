package edu.neu.csye6200;

import java.io.Serializable;
import java.time.LocalDate;
import java.time.Period;
import java.time.chrono.IsoChronology;
import java.time.temporal.ChronoUnit;
import java.util.ArrayList;
import java.util.Collections;
import java.util.Comparator;
import java.util.List;

import edu.neu.csye6200.api.AbstractPerson;

public class Person extends AbstractPerson implements Serializable {
	/**
	 * Initial Release
	 */
	private static final long serialVersionUID = -8114045817350245897L;
	// static makes count class (i.e. global not instance) data
	static private int personCount = 0;
	private final static String MY_EDUCATION = "personal experience: School of Hard Knocks!";
	public String education;
//	private int age = 0;
//	private String fname = "first_name";
//	private String lname = "last_name";

	public Person() {
		super();
		// access static (i.e. class) method using class name
		Person.incrementCount(); // track count of all persons
		this.setEducation(MY_EDUCATION);
	}
	
	public Person(int age, String fname, String lname) {
	super(age, fname, lname);
		// access static (i.e. class) method using class name
		Person.incrementCount(); // track count of all persons
		this.setEducation(MY_EDUCATION);
	}

	public Person(String fname, String lname, LocalDate dob) {
		super(fname, lname, dob);
		// access static (i.e. class) method using class name
		Person.incrementCount(); // track count of all persons
		this.setEducation(MY_EDUCATION);
	}

	public Person(Person p) {
		super();
		// access static (i.e. class) method using class name
		Person.incrementCount(); // track count of all persons
		this.setAge(p.getAge());
		this.setFname(p.getFname());
		this.setLname(p.getLname());
		this.setEducation(p.getEducation());
	}

	// static method is a class (i.e. not instance) method
	// SO access static (i.e. class) method using class name
	// e.g. Person.getCount();
	// and NEITHER this.getCount() NOR getCount()
	public static int getCount() {
		return personCount;
	}

	// static method is a class (i.e. not instance) method
	// SO access static (i.e. class) method using class name
	// e.g. Person.incrementCount();
	// and NEITHER this.incrementCount() NOR incrementCount()
	private static void incrementCount() {
		// access static (i.e. class) member data using class name
		// e.g. Person.personCount;
		// and NEITHER this.personCount NOR personCount
		// three ways to increment count by one
		// Person.personCount = personCount + 1; // add any number
		Person.personCount += 1; // add any number
		// Person.personCount++; // increment by one

	}
//
//	public int getAge() {
//		return this.age;
//	}
//
//	public void setAge(int age) {
//		this.age = age;
//	}
//
//	public String getFname() {
//		return fname;
//	}
//
//	public void setFname(String fname) {
//		this.fname = fname;
//	}
//
//	public String getLname() {
//		return lname;
//	}
//
//	public void setLname(String lname) {
//		this.lname = lname;
//	}

	public void copyPerson(Person p) {
		this.setFname(p.getFname());
		this.setLname(p.getLname());
	}

	private String getEducation() {
		return education;
	}

	public void setEducation(String education) {
		this.education = education;
	}

	public String myEducation() {
		return "informal " + this.getEducation();
	}

	public void showPerson() {
		System.out.println(

				// access static (i.e. class) method using class name
				// e.g. Person.getCount();
				// and NEITHER this.getCount() NOR getCount()

				"Person:"
						// + " # " + Person.getCount() + " :"
						+ " " + this.getLname() + ", " + this.getFname() + ", Age: " + this.getAge() + ", Education: "
						+ this.myEducation());
	}

	@Override
	public String toString() {
		return " ***" + this.getClass().getSimpleName() 
				+ " : " + this.getFname() 
				+ " " + this.getLname()
				+ " age, " + this.getAge();

	}

	@Override
	public void show() {
		System.out.println(this.toString());
	}
	
	public static void demo() {
//		Person obj = new Person(19, "Danny", "Peters");
		Person obj = new Person("Danny", "Peters", IsoChronology.INSTANCE.date(1986, 6, 20));
		System.out.println(obj);
		
		LocalDate today = LocalDate.now();
		LocalDate anniversary = IsoChronology.INSTANCE.date(1982, 10, 2);
		LocalDate nextAnniversary = anniversary.withYear(LocalDate.now().getYear());
		
		Period p = Period.between(today, nextAnniversary);
		Long pDays = ChronoUnit.DAYS.between(today, nextAnniversary);
		System.out.println("I was married on " + anniversary);
		System.out.println("Married now " + anniversary.until(IsoChronology.INSTANCE.dateNow()).getYears() + " years");
		System.out.println("There are " + p.getMonths() + " months, and " +
                p.getDays() + " days until your next anniversary. (" +
                pDays + " days "
                		+ "total)");
		System.out.println(obj.getFname() + " is " + obj.getAge() + " years old.");
		List<Person> people = new ArrayList<>();
		people.add(new Person(19, "Dan", "Smith"));
		people.add(new Person(19, "Jim", "Holt"));
		people.add(new Person(19, "Sue", "Lang"));
		Collections.sort(people, (Person p1, Person p2) -> p1.getLname().compareTo(p2.getLname()));
		people.stream().forEach(e -> System.out.print(e.getFname() + " " + e.getLname() + ", "));
		// CompareTo(): Case sensitive string compare
		Collections.sort(people, Comparator.comparing(Person::getLname));
		people.stream().forEach(e -> System.out.print(e.getLname() + ", "));
	}

}
