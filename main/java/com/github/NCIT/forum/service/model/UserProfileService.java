/**
 * Created by Dawid Stankiewicz on 04.08.2016
 */
package com.github.NCIT.forum.service.model;

import com.github.NCIT.forum.controller.model.UserProfile;


public interface UserProfileService {
    
    public UserProfile findOne(int userId);
    
    public UserProfile findOne(String username);
    
}
