package Demo.Entity;

import Demo.Resources;
import Demo.Utility;

import java.awt.*;

/**
 * Created by Friends on 22-09-2016.
 */
public class Fork1 extends Entity {
    public static int r=0;
    public static boolean showFork1=false;
    public Fork1(int x, int y) {
        super(x, y);
        this.xvel=-10;
    }

    @Override
    public Image getImage() {
        return Resources.fork_handle;
    }

    @Override
    public int getWidth() {
        return 22;
    }

    @Override
    public int getHeight() {
        return 312;
    }

    public void update()
    {
        super.update();
        if(this.x<0) {
            this.isHidden=false;
            this.x = 2400;
        }
        this.yrandomisation();

        this.setBound();

       Fork1.showFork1=this.isHidden;

    }

    public void yrandomisation()
    {
        Fork1.r=Utility.generate(3);
      //  System.out.println(Fork1.r);
        if(Fork1.r==0)
            this.y=199;
        if(Fork1.r==1)
            this.y=191;
        if(Fork1.r==2)
            this.y=206;
    }


}
