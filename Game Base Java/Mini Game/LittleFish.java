import greenfoot.*;  // (World, Actor, GreenfootImage, Greenfoot and MouseInfo)

/**
 * Write a description of class LittleFish here.
 * 
 * @author (Bagus Dimas Adam M) 
 * @version (15 APRIL 2020)
 */
public class LittleFish extends Mover
{
    GreenfootImage Image1=new GreenfootImage("fish2.png");
    GreenfootImage Image2=new GreenfootImage("fish22.png");
    public void act() 
  {
        gerak(Image1,Image2);
        eat();
  }    
}
  
    
    
