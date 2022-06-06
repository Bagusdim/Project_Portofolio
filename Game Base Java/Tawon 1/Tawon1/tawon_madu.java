
import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)
import java.util.List;
import java.util.ArrayList;
/**
 * Write a description of class tawon_madu here.
 * 
 * @Bagus Dimas Adam M 
 * @version (Selasa 24 Maret 2020)
 */

public class tawon_madu extends Actor
{
    /**
     * Act - do whatever the tawon_madu wants to do. This method is called whenever
     * the 'Act' or 'Run' button gets pressed in the environment.
     */
    public void act()
    {
       
        if (Greenfoot.isKeyDown("right"))
        {
            turn(2);
        }
        
        if (Greenfoot.isKeyDown("left"))
        {
            turn(-2);
        }
        
    }
}