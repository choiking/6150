public class Cmd1 {
	public static void main(String[] args) {
		if (args.length > 0) {
		  System.out.println(Cmd1.class.getName()
			+ ".main('" + args[0] + "')");
		} else {
		  System.out.println(Cmd1.class.getName() + " executing main...");
		}
	}
}
