package Demo.Entity;

import Demo.Resources;
import Demo.States.Stage1State;
import Demo.States.Stage2State;

import java.awt.*;

/**
 * Created by Friends on 22-09-2016.
 */
public class Pappu extends Entity {
    public Image[] images = {Resources.p1r1, Resources.p2r, Resources.p3r, Resources.p4r, Resources.p5r, Resources.p6r, Resources.p7r, Resources.p8r};

    public Image[] images2={Resources.pappuf1,Resources.pappuf1a,Resources.pappuf1b,Resources.pappuf1c,Resources.pappuf1d,Resources.pappuf1e,Resources.pappuf1f,Resources.pappuf1g,Resources.pappuf1h,Resources.pappuf1i,Resources.pappuf1j};
    public int i=0;
    public static int j=0;

    public Pappu(int x, int y) {
        super(x, y);
        this.yaccn=1;
    }


    public Image getImage() {
        if(Stage2State.count==1)
        {this.i++;
            this.i = this.i % 8;

            return images[i];
        }


        else
                {
                    j++;
                    if(j>=10)
                    {
                        j=10;
                    }

                   return images2[j];
        }



    }


    public int getWidth() {
        return 60;
    }


    public int getHeight() {
        return 59;
    }

    public void update() {
        super.update();
    }

    public void fly()
    {
        this.yvel=-5;
    }

    public void fall()
    {
        this.yvel=0;
    }

    public void accn()
    {
        this.yvel=-15;
    }
}
