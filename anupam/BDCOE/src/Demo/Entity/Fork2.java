package Demo.Entity;

import Demo.Resources;
import Demo.Utility;

import java.awt.*;

/**
 * Created by Friends on 22-09-2016.
 */
public class Fork2 extends Entity {
    public static int s=0;
    public static boolean showFork2=false;

    public Fork2(int x, int y) {
        super(x, y);
        this.xvel=-10;
    }

    @Override
    public Image getImage() {
        return Resources.fork_handle2;
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
            this.isHidden = false;
            this.x = 2400;
        }
        this.yrandomisation();

        this.setBound();
        Fork2.showFork2=this.isHidden;

    }

    public void yrandomisation()
    {
        Fork2.s= Utility.generate(3);
        //  System.out.println(Fork1.r);
        if(Fork2.s==0)
            this.y=-15;
        if(Fork2.s==1)
            this.y=-25;
        if(Fork2.s==2)
            this.y=-11;
    }

}
