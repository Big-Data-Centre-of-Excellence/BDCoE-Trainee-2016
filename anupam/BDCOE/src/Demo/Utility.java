package Demo;

import java.util.Random;

/**
 * Created by Friends on 22-09-2016.
 */
public class Utility {
    public static Random random=new Random();

    public static int generate(int a)
    {

        int r;
        r=random.nextInt(a);
        return r;
    }
}
