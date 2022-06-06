import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class BigFish here.
 * 
 * @author (Bagus Dimas Adam M) 
 * @version (15 APRIL 2020)
 */
public class BigFish extends Mover
{
    GreenfootImage Image1=new GreenfootImage("fish3.png");
    GreenfootImage Image2=new GreenfootImage("fish33.png");
    public void act() 
    {
       eat();
       gerak(Image1,Image2);
    }    
}
